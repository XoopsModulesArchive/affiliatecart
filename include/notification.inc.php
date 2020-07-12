<?php
//  ------------------------------------------------------------------------ //
//                          Affiliate Cart v1.0                              //
//  ------------------------------------------------------------------------ //

function affiliatecart_notify_iteminfo($category, $item_id)
{
	global $xoopsModule, $xoopsModuleConfig, $xoopsConfig;

	if (empty($xoopsModule) || $xoopsModule->getVar('dirname') != 'affiliatecart') {	
		$module_handler =& xoops_gethandler('module');
		$module =& $module_handler->getByDirname('affiliatecart');
		$config_handler =& xoops_gethandler('config');
		$config =& $config_handler->getConfigsByCat(0,$module->getVar('mid'));
	} else {
		$module =& $xoopsModule;
		$config =& $xoopsModuleConfig;
	}

	//include_once XOOPS_ROOT_PATH . '/modules/' . $module->getVar('dirname') . '/language/' . $xoopsConfig['language'] . '/main.php';

	if ($category=='global') {
		$item['name'] = '';
		$item['url'] = '';
		return $item;
	}

	global $xoopsDB;
	if ($category=='category') {
		// Assume we have a valid category id
		$sql = 'SELECT title FROM ' . $xoopsDB->prefix('affiliatecart_cat') . ' WHERE cid = '.$item_id;
		$result = $xoopsDB->query($sql); // TODO: error check
		$result_array = $xoopsDB->fetchArray($result);
		$item['name'] = $result_array['title'];
		$item['url'] = XOOPS_URL . '/modules/' . $module->getVar('dirname') . '/viewcat.php?cid=' . $item_id;
		return $item;
	}

	if ($category=='link') {
		// Assume we have a valid link id
		$sql = 'SELECT cid,title FROM '.$xoopsDB->prefix('affiliatecart_links') . ' WHERE lid = ' . $item_id;
		$result = $xoopsDB->query($sql); // TODO: error check
		$result_array = $xoopsDB->fetchArray($result);
		$item['name'] = $result_array['title'];
		$item['url'] = XOOPS_URL . '/modules/' . $module->getVar('dirname') . '/singlelink.php?cid=' . $result_array['cid'] . '&amp;lid=' . $item_id;
		return $item;
	}
}
?>
