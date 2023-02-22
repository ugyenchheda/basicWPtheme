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
?>