<?php
//  ------------------------------------------------------------------------ //
//                          Affiliate Cart v1.0                              //
//  ------------------------------------------------------------------------ //
include '../../mainfile.php';
$lid = intval($HTTP_GET_VARS['lid']);
$cid = intval($HTTP_GET_VARS['cid']);
$sql = sprintf("UPDATE %s SET hits = hits+1 WHERE lid = %u AND status > 0", $xoopsDB->prefix("affiliatecart_links"), $lid);
$xoopsDB->queryF($sql);
$result = $xoopsDB->query("select url from ".$xoopsDB->prefix("affiliatecart_links")." where lid=$lid and status>0");
list($url) = $xoopsDB->fetchRow($result);
$url = htmlspecialchars(preg_replace( '/javascript:/si' , 'java script:', $url ), ENT_QUOTES);


if ( $xoopsModuleConfig['frame'] != "" ) {
	header('Content-Type:text/html; charset='._CHARSET);
	header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header('Cache-Control: no-store, no-cache, must-revalidate');
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	echo "<html><head>
		<title>".$xoopsConfig['sitename']."</title>
		</head>
		<frameset rows='70px,100%' cols='*' border='0' frameborder='0' framespacing='0' >
		<frame src='myheader.php?url=$url&amp;cid=$cid&amp;lid=$lid' frame name='xoopshead' scrolling='no' target='main' Noresize>
		<frame src='".$url."' frame name='main' scrolling='auto' target='Main'>
		</frameset></html>";
} else {
	echo "<html><head><meta http-equiv=\"Refresh\" content=\"0; URL=".$url."\"></meta></head><body></body></html>";
}
exit();

?>
