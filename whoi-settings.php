<?php
/**
* Plugin Name: WHOI network settings
* Plugin URI: http://web.whoi.edu
* Description: WHOI Role Customizing. Remove Domain Mapping from non-network admins
* Author: H Gordon/CIS
* Author URI: http://web.whoi.edu
* Version: 1.0
*/

//Remove DM from menu for non-Super Admins


function whoi_remove_dm_menu() {

    global $user_ID;

    if ( !current_user_can( 'manage_network' ) ) {
	remove_submenu_page('tools.php?=domainmapping', 'domain-mapping');;
    }
}
add_action( 'admin_init', 'whoi_remove_dm_menu' );
//finish custom code
?>
