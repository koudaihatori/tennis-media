<?php

add_action( 'enqueue_block_editor_assets', function () {
	wp_enqueue_style( 'jin_custom_gb_style', get_template_directory_uri() . '/gb-custom/asset/gb-custom.css' );
	wp_enqueue_style( 'jin_blocks_style', get_template_directory_uri() . '/gb-custom/jin-blocks/dist/blocks.editor.build.css' );
	wp_enqueue_script( 'gb-custom', get_template_directory_uri() . '/gb-custom/asset/gb-custom.js',[
		'wp-element',
		'wp-rich-text',
		'wp-editor',
	]);
	wp_enqueue_script( 'jin-block-extention', get_template_directory_uri() . '/gb-custom/jin-blocks/dist/blocks.build.js', [ 
		'wp-blocks',
		'wp-components',
		'wp-element',
		'wp-i18n',
		'wp-editor',
		'wp-compose',
	]);
    if(function_exists('register_block_type')) register_block_type( 'blocks/extention', [ 'editor_script' => 'jin-block-extention' ]);
	
	$inst_dir = get_template_directory_uri();
    wp_localize_script('gb-custom', 'jin_inst_dir', $inst_dir);
	wp_localize_script('jin-block-extention', 'jin_inst_dir_gb', $inst_dir);
});


// custom.phpで使用する関数のためのフックとして使う
function gutenberg_jin_editor_settings() {
	wp_add_inline_style( 'wp-color-picker', jin_customizer_settings() );
}
add_action('enqueue_block_editor_assets', 'gutenberg_jin_editor_settings');


// グーテンベルクにオリジナルのブロックカテゴリーを追加
function jin_block_category( $category, $post ) {
    return array_merge(
        $category,
        array(
            array(
                'slug' => 'jin-block',
                'title' => 'JINブロック',
                'icon'  => '',
            ),
        )
    );
}
add_filter( 'block_categories', 'jin_block_category', 10, 2 );


// グーテンベルクの投稿画面にオリジナルのクラスを追加
function add_jin_h_class( $classes ) {
	$h2_style = get_theme_mod( 'h2_style', 'h2-style01' );
	$h3_style = get_theme_mod( 'h3_style', 'h3-style01' );
	$h4_style = get_theme_mod( 'h4_style', 'h4-style01' );
	$classes .= $h2_style." ".$h3_style." ".$h4_style;
	return $classes;
}
add_filter( 'admin_body_class', 'add_jin_h_class' );



?>