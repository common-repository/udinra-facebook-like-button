<?php


function Udinra_Facebook_function( $Udinra_Facebook_atts ) {

    $Udinra_Facebook_parameters = shortcode_atts( array(
									'button' => 'like',
									'size' => 'small',
									'color' => 'light',
									'layout' => 'standard',
									'faces' => 'false',
									'like' => '',									
									'header' => '',
									'body' => '',
									'style' => 'UdinraFacebookAqua'
									), $Udinra_Facebook_atts );

		$create_facebook_html = '<div class="' . $Udinra_Facebook_parameters["style"] . '">';
		if($Udinra_Facebook_parameters["header"] != '' || !ctype_space($Udinra_Facebook_parameters["header"])) {
			$create_facebook_html .= '<h3>' . $Udinra_Facebook_parameters["header"] . '</h3><hr />';
		}	
		if($Udinra_Facebook_parameters["body"] != '' || !ctype_space($Udinra_Facebook_parameters["body"])) {
			$create_facebook_html .= '<p>' . $Udinra_Facebook_parameters["body"] . '</p>';
		}										

		if($Udinra_Facebook_parameters["like"] != '' || !ctype_space($Udinra_Facebook_parameters["like"])){
			$create_facebook_button = $create_facebook_html . '<div class="fb-like" data-href="'.$Udinra_Facebook_parameters["like"].'" ';
		}
		if($Udinra_Facebook_parameters["layout"] == 'standard'){
			$create_facebook_button = $create_facebook_button . 'data-width="300" data-layout="standard" ';
		}
		else{
			$create_facebook_button = $create_facebook_button . 'data-width="100" data-layout="'.$Udinra_Facebook_parameters["layout"].'" ';
		}

		$create_facebook_button = $create_facebook_button . 'data-action="'.$Udinra_Facebook_parameters["button"].
								 '" data-size="'.$Udinra_Facebook_parameters["size"] . 
								 '" data-show-faces="'.$Udinra_Facebook_parameters["faces"] . '"></div>';
		
		$create_facebook_button = $create_facebook_button . '</div>';
		$return_shortcode_value = $create_facebook_button;

		Udinra_Facebook_script();
		Udinra_Facebook_css();
		return $return_shortcode_value;
}

function Udinra_Facebook_script() {
		wp_enqueue_script( 'udinra-facebook-func', plugins_url( 'js/func.js',dirname( __FILE__ )),NULL,NULL, false);
}

function Udinra_Facebook_css() {
		wp_enqueue_style( 'udinra-facebook-css', plugins_url( 'css/color.css',dirname( __FILE__ ))) ;
}
	
add_shortcode( 'Udinra_Facebook', 'Udinra_Facebook_function' );

?>