<?php

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'aside', 'gallery', "video") );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

// Load in our CSS
function wphierarchy_enqueue_styles() {

  wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );

}
add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_styles' );



// Regsiter Menu locations
register_nav_menus(array(
    "main-menu" => esc_html__("Main Menu", "wphierarchy"),
    "footer-menu" => esc_html__("Footer Menu", "wphierarchy")
));

// Register Sidebar
function wphierarchy_widgets_init(){
    register_sidebar(array(
        "name"  => esc_html__("Main Sidebar", "wphierarchy"),
        "id"    => "main-sidebar",
        "description" => esc_html__("Add widgets for main sidebar", "wphierarchy"),
        "before_widget" => "<section class='widget'>",
        "after_widget" => "</section>",
        "before_title" => "<h2 class='widget-title'>",
        "after_title" => "</h2>"
    ));
    register_sidebar(array(
        "name"  => esc_html__("Page Sidebar", "wphierarchy"),
        "id"    => "page-sidebar",
        "description" => esc_html__("Add widgets for page sidebar", "wphierarchy"),
        "before_widget" => "<section class='widget'>",
        "after_widget" => "</section>",
        "before_title" => "<h2 class='widget-title'>",
        "after_title" => "</h2>"
    ));
    register_sidebar(array(
        "name"  => esc_html__("Front Sidebar", "wphierarchy"),
        "id"    => "front-sidebar",
        "description" => esc_html__("Add widgets for front sidebar", "wphierarchy"),
        "before_widget" => "<section class='widget'>",
        "after_widget" => "</section>",
        "before_title" => "<h2 class='widget-title'>",
        "after_title" => "</h2>"
    ));
}
add_action("widgets_init", "wphierarchy_widgets_init");