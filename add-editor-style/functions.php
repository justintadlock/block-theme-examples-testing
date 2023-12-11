<?php
add_action( 'after_setup_theme', 'themeslug_editor_styles' );

/**
 * Adds the `style.css` file as an editor stylesheet.
 *
 * @since 1.0.0
 */
function themeslug_editor_styles() {
	add_editor_style( get_stylesheet_uri() );
}
