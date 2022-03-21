<?php 
    register_nav_menus(
        array('primary' => "Top Menu")
    );

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-header' );
    register_sidebar(
        array(
            "name" => "Sidebar Location",
            "id" => "sidebar"
        )
    );
    add_theme_support('custom-background');
    add_post_type_support( 'excerpt', 'excerpt' );
?>