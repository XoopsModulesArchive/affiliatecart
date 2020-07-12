<?php
//  ------------------------------------------------------------------------ //
//                          Affiliate Cart v1.0                              //
//  ------------------------------------------------------------------------ //
function b_affiliatecart_top_show($options) {
	global $xoopsDB;
	$block = array();
	$myts =& MyTextSanitizer::getInstance();
	$result = $xoopsDB->query("SELECT lid, cid, title, date, hits FROM ".$xoopsDB->prefix("affiliatecart_links")." WHERE status>0 ORDER BY ".$options[0]." DESC",$options[1],0);
	while($myrow = $xoopsDB->fetchArray($result)){
		$link = array();
		$title = $myts->makeTboxData4Show($myrow["title"]);
		if ( !XOOPS_USE_MULTIBYTES ) {
			if (strlen($myrow['title']) >= $options[2]) {
				$title = $myts->makeTboxData4Show(substr($myrow['title'],0,($options[2] -1)))."...";
			}
		}
		$link['id'] = $myrow['lid'];
		$link['cid'] = $myrow['cid'];
		$link['title'] = $title;
		if($options[0] == "date"){
			$link['date'] = formatTimestamp($myrow['date'],'s');
		}elseif($options[0] == "hits"){
			$link['hits'] = $myrow['hits'];
		}
		$block['links'][] = $link;
	}
	return $block;
}

function b_affiliatecart_top_edit($options) {
	$form = ""._MB_AFFILIATECART_DISP."&nbsp;";
	$form .= "<input type='hidden' name='options[]' value='";
	if($options[0] == "date"){
		$form .= "date'";
	}else {
		$form .= "hits'";
	}
	$form .= " />";
	$form .= "<input type='text' name='options[]' value='".$options[1]."' />&nbsp;"._MB_AFFILIATECART_LINKS."";
	$form .= "&nbsp;<br>"._MB_AFFILIATECART_CHARS."&nbsp;<input type='text' name='options[]' value='".$options[2]."' />&nbsp;"._MB_AFFILIATECART_LENGTH."";

	return $form;
}
?>
