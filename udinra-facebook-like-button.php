<?php
/*
Plugin Name: Udinra Facebook Like button
Plugin URI: https://udinra.com/downloads/facebook-like-to-download-pro
Description: Cool stylish Facebook like button to increase your Facebook presence
Author: Udinra
Version: 1.0
Author URI: https://udinra.com
*/

function Udinra_Facebook() {
	$Udinra_Facebook_subscribe = '';

?>	
<div class="wrap">
	<u><h1>Udinra Facebook Like(Configuration)</h1></u><br /><br />
	<ul>
		<li>A new button is added in Visual Editor.</li>
		<li>You can create unlimited buttons using Visual Editor button.</li>
		<li>Also you can paste generated shortcode in Text Widget to have the buttons in sidebar.</li>
		<li>In case of any issues mail me at esha@udinra.com.</li>
	</ul>
	<a href="https://udinra.com/downloads/facebook-like-download-wordpress-plugin"><u><b>Buy Facebook like to download Pro</b></u></a><br /><br />
	Visitors will be able to download file instantly if they like your Facebook page or like your content on Facebook.<br />
	You can configure each and every button as per your requirement.<br />

	<iframe width="560" height="315" src="https://www.youtube.com/embed/Lr7fCReJl_8" frameborder="0" allowfullscreen></iframe>

</div>

<?php
}

function Udinra_Facebook_subscribe_admin() {
	if (function_exists('add_options_page')) {
		add_options_page('Udinra Facebook Like', 'Udinra Facebook Like', 'manage_options', basename(__FILE__), 'Udinra_Facebook');
	}
	Udinra_Facebook_button();
}

function Udinra_Facebook_admin_notice() {

		global $current_user ;
		$user_id = $current_user->ID;
		if ( ! get_user_meta($user_id, 'Udinra_Facebook_admin_notice') ) {
			echo '<div class="notice notice-info"><p>'; 
			printf(__('Buy Udinra Facebook Like to download Pro for $6.99 only.PayPal - udinesvi@gmail.com | <a href="%1$s">Hide Notice</a>'), '?Udinra_Facebook_admin_ignore=0');
			echo "</p></div>";
		}

}

function Udinra_Facebook_admin_ignore() {
	global $current_user;
	$user_id = $current_user->ID;
	if ( isset($_GET['Udinra_Facebook_admin_ignore']) && '0' == $_GET['Udinra_Facebook_admin_ignore'] ) {
		add_user_meta($user_id, 'Udinra_Facebook_admin_notice', 'true', true);
	}
}
 
include 'init/udinra-init-facebook.php';
include 'lib/udinra-facebook-visual-editor.php';

add_action('admin_menu','Udinra_Facebook_subscribe_admin');	
add_action('admin_notices', 'Udinra_Facebook_admin_notice');
add_action('admin_init', 'Udinra_Facebook_admin_ignore');

?>
