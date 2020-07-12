<?php
//  ------------------------------------------------------------------------ //
//                          Affiliate Cart v1.0                              //
//  ------------------------------------------------------------------------ //

function affiliatecart_search($queryarray, $andor, $limit, $offset, $userid){
	global $xoopsDB;
	$sql = "SELECT l.lid,l.cid,l.title,l.submitter,l.date,t.description FROM ".$xoopsDB->prefix("affiliatecart_links")." l LEFT JOIN ".$xoopsDB->prefix("affiliatecart_text")." t ON t.lid=l.lid WHERE status>0";
	if ( $userid != 0 ) {
		$sql .= " AND l.submitter=".$userid." ";
	}
	// because count() returns 1 even if a supplied variable
	// is not an array, we must check if $querryarray is really an array
	if ( is_array($queryarray) && $count = count($queryarray) ) {
		$sql .= " AND ((l.title LIKE '%$queryarray[0]%' OR t.description LIKE '%$queryarray[0]%')";
		for($i=1;$i<$count;$i++){
			$sql .= " $andor ";
			$sql .= "(l.title LIKE '%$queryarray[$i]%' OR t.description LIKE '%$queryarray[$i]%')";
		}
		$sql .= ") ";
	}
	$sql .= "ORDER BY l.date DESC";
	$result = $xoopsDB->query($sql,$limit,$offset);
	$ret = array();
	$i = 0;
 	while($myrow = $xoopsDB->fetchArray($result)){
		$ret[$i]['image'] = "images/home.gif";
		$ret[$i]['link'] = "singlelink.php?cid=".$myrow['cid']."&amp;lid=".$myrow['lid']."";
		$ret[$i]['title'] = $myrow['title'];
		$ret[$i]['time'] = $myrow['date'];
		$ret[$i]['uid'] = $myrow['submitter'];
		$i++;
	}
	return $ret;
}
?>
