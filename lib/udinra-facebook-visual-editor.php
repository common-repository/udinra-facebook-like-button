<?php
function Udinra_Facebook_button() {
	$Udinra_Facebook_cap = apply_filters( 'Udinra_Facebook_button_cap', 'edit_posts' );
	if ( current_user_can( $Udinra_Facebook_cap ) ) {
		add_filter( 'mce_external_plugins', 'Udinra_Facebook_subscribe_plugin' );
		add_filter( 'mce_buttons', 'Udinra_Facebook_register_button' );
	}
}
function Udinra_Facebook_subscribe_plugin( $plugin_array ) {
	$plugin_array['Udinra_Facebook_subscribe'] = plugins_url( 'js/udinra_facebook_button.js',dirname( __FILE__ ));
	return $plugin_array;
}
function Udinra_Facebook_register_button( $buttons ) {
	array_push( $buttons, "Udinra_Facebook_subscribe" );
	return $buttons;
}
?>