<?php

function writers_haven_pattern_styles()
{
	wp_enqueue_style('writers-haven-patterns', get_stylesheet_directory_uri() . '/assets/css/patterns.css', array(), filemtime(get_template_directory() . '/assets/css/patterns.css'));
	if (is_admin()) {
		global $pagenow;
		if ('site-editor.php' === $pagenow) {
			// Do not enqueue editor style in site editor
			return;
		}
		wp_enqueue_style('writers-haven-editor', get_stylesheet_directory_uri() . '/assets/css/editor.css', array(), filemtime(get_template_directory() . '/assets/css/editor.css'));
	}
}
add_action('enqueue_block_assets', 'writers_haven_pattern_styles');


add_theme_support('wp-block-styles');


// Register customer Writers Haven pattern categories
function writers_haven_register_block_pattern_categories()
{
	register_block_pattern_category(
		'heros',
		array(
			'label'       => __('Heros', 'writers-haven'),
			'description' => __('Writers Haven hero patterns', 'writers-haven'),
		)
	);
	register_block_pattern_category(
		'navigation_headers',
		array(
			'label'       => __('Headers', 'writers-haven'),
			'description' => __('Writers Haven navigation header patterns', 'writers-haven'),
		)
	);
	register_block_pattern_category(
		'teams',
		array(
			'label'       => __('Teams', 'writers-haven'),
			'description' => __('Writers Haven team patterns', 'writers-haven'),
		)
	);
}

add_action('init', 'writers_haven_register_block_pattern_categories');




function writers_haven_column_block_editor() {
    add_editor_style( '/assets/css/block-editor.css' );
		add_editor_style( get_stylesheet_directory_uri() . '/assets/css/block-editor.css' );

}
add_action( 'admin_init', 'writers_haven_column_block_editor' );
