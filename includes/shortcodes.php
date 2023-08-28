<?php

/**
 * Contains all the shortcodes
 * 
 */


if ( ! function_exists('customthemechild_current_year_shortcode') ) {
	/**
	 * Get the current year.
	 *
	 * @return string
	 */
	function customthemechild_current_year_shortcode() {
		return date( "Y" );
	}
}
add_shortcode( 'customthemechild_current_year', 'customthemechild_current_year_shortcode' );

