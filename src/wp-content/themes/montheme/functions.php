<?php
//? Another way
/* 

    add_action('wp_head', function() {
        die('Hello Guys!');
    });

    add_action('wp_head', function() {
        die('Bye Guys!');
    }, 5);

    add_action('after_setup_theme', function() {
        add_theme_support('title-tag');
    }); 
    
    */
//? With namespace way
/* 

    namespace App;

    function theme_supports() {
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', ‘App\theme_supports’);
    
    */

//? Les hooks
//? = Les actions

function montheme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête menu');
}

function montheme_register_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js', ['popper'], false, true); // popper est une dépendance
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js', [], false, true);  // Pas de dépendence , pas de version, chargée dans le footer
    // wp_deregister_script('jquery'); => On désactive le JQuery de Wordpress pour éventuellement enregistrer notre popre JQuery
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

//? Les filtres

function montheme_title()
{
    return 'my first WP with Docker site';
}

function montheme_title_separator()
{
    return '|';
}

function montheme_title_parts($title)
{
    // unset($title['tagline']);
    $title['tagline'] = 'WP with Docker';
    // $title['demo'] = 'WP with Docker';
    // var_dump($title); die();
    return $title;
}

function montheme_menu_class(array $classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

function montheme_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}


add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('wp_title', 'montheme_title');
add_filter('document_title_separator', 'montheme_title_separator');
add_filter('document_title_parts', 'montheme_title_parts');
add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');
