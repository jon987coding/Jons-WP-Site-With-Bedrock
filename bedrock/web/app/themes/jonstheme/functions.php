<?php

	if ( ! isset( $content_width ) ) {
		$content_width = 800; /* pixels */
	}
	
	function includeMainStylesheet() {
		$rand = rand( 1, 99999999999 );
		wp_enqueue_style( 'style', get_stylesheet_uri(), '', $rand );
	}
	add_action('wp_head', 'includeMainStylesheet');
?>