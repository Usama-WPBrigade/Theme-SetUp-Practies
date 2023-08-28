<?php

/**
 * Theme setup, support and script/style enqueue
 * 
 */

if ( ! function_exists( 'customthemechild_scripts_styles' ) ) {
	
	/**
	 * Theme Scripts & Styles.
	 *
	 * @return void
	 */
	function customthemechild_scripts_styles() {

		// dequeue some scripts loaded by 'hello-customtheme'
		wp_dequeue_script( 'jquery-match-height-js' );
		wp_dequeue_script( 'hello-customtheme-main-js' );

		wp_enqueue_style(
			'customthemechild',
			CUSTOMTHEME_THEME_URI . '/style.css',
			[],
			CUSTOMTHEME_THEME_VERSION
		);

		// wp_enqueue_style(
		// 	'customthemechild-google-fonts',
		// 	'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@500;600;700&display=swap',
		// 	[],
		// 	NULL
		// );
	
		wp_enqueue_style(
			'customthemechild-main',
			CUSTOMTHEME_THEME_URI . '/assets/css/main.css',
			[],
			CUSTOMTHEME_THEME_VERSION
		);
				
		// jQuery iScroll
		wp_enqueue_script(
			'customthemechild-main',
			CUSTOMTHEME_THEME_URI . '/assets/js/main.js',
			array( 'jquery' ),
			CUSTOMTHEME_THEME_VERSION,
			true
		);

	}
}
add_action( 'wp_enqueue_scripts', 'customthemechild_scripts_styles', 200 );


/**
 * Register sidebars
 * 
 */
if ( ! function_exists( 'customthemechild_widgets_init' ) ) {
	function customthemechild_widgets_init() {
		
		// this is just a boilerplate
		/*register_sidebar( array(
			'name'          => __( 'Sidebar Name', 'customthemechild' ),
			'id'            => 'sidebar-id',
			'description'   => __( 'Some description', 'customthemechild' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="heading">',
			'after_title'   => '</h2>',
		) );*/
	}
}
//add_action( 'widgets_init', 'customthemechild_widgets_init' );
