<?php
//  ------------------------------------------------------------------------ //
//                          Affiliate Cart v1.0                              //
//  ------------------------------------------------------------------------ //

include '../../mainfile.php';
$com_itemid = isset($HTTP_GET_VARS['com_itemid']) ? intval($HTTP_GET_VARS['com_itemid']) : 0;
if ($com_itemid > 0) {
	// Get link title
	$sql = "SELECT title FROM " . $xoopsDB->prefix('affiliatecart_links') . " WHERE lid=" . $com_itemid . "";
	$result = $xoopsDB->query($sql);
	$row = $xoopsDB->fetchArray($result);
    $com_replytitle = $row['title'];
    include XOOPS_ROOT_PATH.'/include/comment_new.php';
}
?>
