<?php
register_nav_menus(['primary' => 'Primary menu']);

function ugyenportfolio_assets(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'ugyenportfolio_assets');

function ugyenportfolio_widgets_init() {
    register_sidebar( array(
        'name' => 'Sidebar',
        'id'   => 'sidebar',
        'before_widget'=> '<div>',
        'after_widget'=> '</div>',
        'before_title'=> '<h2>',
        'after_title'=> '</h2>',

    ));
}
add_action('widgets_init','ugyenportfolio_widgets_init');

function ugyenportfolio_theme_setup(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme','ugyenportfolio_theme_setup');

function ugyenportfolio_read_more($more){
    global $post;
    return '<a href="'.get_permalink($post->ID).'">More &raquo;</a>';
}
add_filter('excerpt_more', 'ugyenportfolio_read_more');

add_theme_support( 'post-thumbnails' );
add_image_size( 'thmbsiz', 250, 150 );
?>