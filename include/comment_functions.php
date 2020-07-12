<?php
//  ------------------------------------------------------------------------ //
//                          Affiliate Cart v1.0                              //
//  ------------------------------------------------------------------------ //

// comment callback functions
function affiliatecart_com_update($link_id, $total_num){
	$db =& Database::getInstance();
	$sql = 'UPDATE '.$db->prefix('affiliatecart_links').' SET comments = '.$total_num.' WHERE lid = '.$link_id;
	$db->query($sql);
}

function affiliatecart_com_approve(&$comment){
	// notification mail here
}
?>