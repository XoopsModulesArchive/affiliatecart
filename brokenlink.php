<?php
//  ------------------------------------------------------------------------ //
//                          Affiliate Cart v1.0                              //
//  ------------------------------------------------------------------------ //
include "header.php";
$myts =& MyTextSanitizer::getInstance(); // MyTextSanitizer object

if (!empty($HTTP_POST_VARS['submit'])) {
	if (empty($xoopsUser)) {
		$sender = 0;
	} else {
		$sender = $xoopsUser->getVar('uid');
	}
	$lid = intval($HTTP_POST_VARS['lid']);
	$ip = getenv("REMOTE_ADDR");
	if ($sender != 0) {
		// Check if REG user is trying to report twice.
   		$result=$xoopsDB->query("SELECT COUNT(*) FROM ".$xoopsDB->prefix("affiliatecart_broken")." WHERE lid=".$lid." AND sender=".$sender."");
       	list($count)=$xoopsDB->fetchRow($result);
       	if ($count > 0) {
			redirect_header("index.php",2,_MD_ALREADYREPORTED);
			exit();
        }
  	} else {
   		// Check if the sender is trying to vote more than once.
    	$result=$xoopsDB->query("SELECT COUNT(*) FROM ".$xoopsDB->prefix("affiliatecart_broken")." WHERE lid=$lid AND ip = '$ip'");
   		list($count)=$xoopsDB->fetchRow($result);
    	if ($count > 0) {
			redirect_header("index.php",2,_MD_ALREADYREPORTED);
			exit();
    	}
	}
	$newid = $xoopsDB->genId($xoopsDB->prefix("affiliatecart_broken")."_reportid_seq");
	$sql = sprintf("INSERT INTO %s (reportid, lid, sender, ip) VALUES (%u, %u, %u, '%s')", $xoopsDB->prefix("affiliatecart_broken"), $newid, $lid, $sender, $ip);
	$xoopsDB->query($sql) or exit();
	$tags = array();
	$tags['BROKENREPORTS_URL'] = XOOPS_URL . '/modules/' . $xoopsModule->getVar('dirname') . '/admin/index.php?op=listBrokenLinks';
	$notification_handler =& xoops_gethandler('notification');
	$notification_handler->triggerEvent('global', 0, 'link_broken', $tags);
	redirect_header("index.php",2,_MD_THANKSFORINFO);
	exit();
} else {
	$xoopsOption['template_main'] = 'affiliatecart_brokenlink.html';
	include XOOPS_ROOT_PATH.'/header.php';
	$xoopsTpl->assign('lang_reportbroken', _MD_REPORTBROKEN);
	$xoopsTpl->assign('link_id', intval($HTTP_GET_VARS['lid']));
	$xoopsTpl->assign('lang_thanksforhelp', _MD_THANKSFORHELP);
	$xoopsTpl->assign('lang_forsecurity', _MD_FORSECURITY);
	$xoopsTpl->assign('lang_cancel', _MD_CANCEL);
	include_once XOOPS_ROOT_PATH.'/footer.php';
}
?>
