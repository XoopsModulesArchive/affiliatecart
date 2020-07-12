<?php
//  ------------------------------------------------------------------------ //
//                          Affiliate Cart v1.0                              //
//  ------------------------------------------------------------------------ //
include "header.php";
$myts =& MyTextSanitizer::getInstance(); // MyTextSanitizer object
include_once XOOPS_ROOT_PATH."/class/xoopstree.php";
$mytree = new XoopsTree($xoopsDB->prefix("affiliatecart_cat"),"cid","pid");
$xoopsOption['template_main'] = 'affiliatecart_topten.html';
include XOOPS_ROOT_PATH."/header.php";
//generates top 10 charts by rating and hits for each main category

if(!empty($_GET['rate'])){
	$sort = _MD_RATING;
	$sortDB = "rating";
}else{
	$sort = _MD_HITS;
	$sortDB = "hits";
}
$xoopsTpl->assign('lang_sortby' ,$sort);
$xoopsTpl->assign('lang_rank' , _MD_RANK);
$xoopsTpl->assign('lang_title' , _MD_TITLE);
$xoopsTpl->assign('lang_category' , _MD_CATEGORY);
$xoopsTpl->assign('lang_hits' , _MD_HITS);
$xoopsTpl->assign('lang_rating' , _MD_RATING);
$xoopsTpl->assign('lang_vote' , _MD_VOTE);
$arr=array();
$result=$xoopsDB->query("select cid, title from ".$xoopsDB->prefix("affiliatecart_cat")." where pid=0");
$e = 0;
$rankings = array();
while(list($cid, $ctitle)=$xoopsDB->fetchRow($result)){
	$rankings[$e]['title'] = sprintf(_MD_TOP10, $myts->htmlSpecialChars($ctitle));
	$query = "select lid, cid, title, hits, rating, votes from ".$xoopsDB->prefix("affiliatecart_links")." where status>0 and (cid=$cid";
	// get all child cat ids for a given cat id
	$arr=$mytree->getAllChildId($cid);
	$size = count($arr);
	for($i=0;$i<$size;$i++){
		$query .= " or cid=".$arr[$i]."";
	}
	$query .= ") order by ".$sortDB." DESC";
	$result2 = $xoopsDB->query($query,10,0);
	$rank = 1;
	while(list($lid,$lcid,$ltitle,$hits,$rating,$votes)=$xoopsDB->fetchRow($result2)){
		$catpath = $mytree->getPathFromId($lcid, "title");
		$catpath= substr($catpath, 1);
		$catpath = str_replace("/"," <span class='fg2'>&raquo;</span> ",$catpath);
		$rankings[$e]['links'][] = array('id' => $lid, 'cid' => $cid, 'rank' => $rank, 'title' => $myts->htmlSpecialChars($ltitle), 'category' => $catpath, 'hits' => $hits, 'rating' => number_format($rating, 2), 'votes' => $votes);
		$rank++;
	}
	$e++;
}
$xoopsTpl->assign('rankings', $rankings);
include XOOPS_ROOT_PATH.'/footer.php';
?>
