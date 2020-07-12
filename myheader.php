<?php
//  ------------------------------------------------------------------------ //
//                          Affiliate Cart v1.0                              //
//  ------------------------------------------------------------------------ //

include "../../mainfile.php";
$url = htmlspecialchars(preg_replace( '/javascript:/si' , 'java script:', $HTTP_GET_VARS['url'] ));
$lid = intval($HTTP_GET_VARS['lid']);
$cid = intval($HTTP_GET_VARS['cid']);
echo"<html><head><style><!--.bg1 {    background-color : #E3E4E0;}.bg2 {    background-color : #e5e5e5;}.bg3 {     background-color : #f6f6f6;}.bg4 {    background-color : #f0f0f0;}.bg5 {    background-color : f8f8f8;}body { margin-left: 0px;margin-top: 0px;margin-right: 0px;margin-bottom: 0px;font-family: Tahoma, taipei; color;#000000; font-size: 10px; background-color : #2F5376; color: #ffffff;}a {  font-weight: bold;font-family: Tahoma, taipei; font-size: 10px; text-decoration: none; color: #666666; font-style: normal}A:hover {  font-weight: bold;text-decoration: underline;  font-family: Tahoma, taipei; font-size: 10px; color: #FF9966; font-style: normal}td {  font-family: Tahoma, taipei; color: #000000; font-size: 10px;border-top-width : 1px; border-right-width : 1px; border-bottom-width : 1px; border-left-width : 1px;}img { border:0;}//--></style>";
$mail_subject = rawurlencode(sprintf(_MD_INTRESTLINK,$xoopsConfig['sitename']));
$mail_body = rawurlencode(sprintf(_MD_INTLINKFOUND,$xoopsConfig['sitename']).':  '.XOOPS_URL.'/modules/affiliatecart/singlelink.php?cid='.$cid.'&amp;lid='.$lid);
?>

</head><body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="150"><a href="<?php echo XOOPS_URL; ?>" target="_BLANK"><img src="<?php echo XOOPS_URL; ?>/images/logo.gif" alt="" /></a>
<td width="100%" align="center">
<table class="bg3" width=95% cellspacing="2" cellpadding="3" border="0" style="border: #e0e0e0 1px solid;"><tr>
<td style="border-bottom: #e0e0e0 1px solid;">
<b><?php echo $xoopsConfig['sitename']; ?></b></td>
</tr>
<tr>
<td class='bg4' align="center"><small>
<a target="main" href="ratelink.php?cid=<?php echo $cid; ?>&amp;lid=<?php echo $lid; ?>"><?php echo _MD_RATETHISSITE; ?></a> | <a target="main" href="modlink.php?lid=<?php echo $lid; ?>"><?php echo _MD_MODIFY; ?></a> | <a target="main" href="brokenlink.php?lid=<?php echo $lid; ?>"><?php echo _MD_REPORTBROKEN; ?></a> | <a target='_top' href='mailto:?subject=<?php echo $mail_subject; ?>&body=<?php echo $mail_body;?>'><?php echo _MD_TELLAFRIEND; ?></a> | <a target='_top' href="<?php echo XOOPS_URL; ?>">Back to <?php echo $xoopsConfig['sitename']; ?></a> | <a target='_top' href="<?php echo $url; ?>">Close Frame</a>
</small></td></tr></table>
</td></tr></table></body></html>
