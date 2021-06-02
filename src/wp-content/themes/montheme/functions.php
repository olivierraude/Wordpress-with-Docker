<?php
    /* add_action('wp_head', function() {
        die('Hello Guys!');
    });
    add_action('wp_head', function() {
        die('Bye Guys!');
    }, 5); */

    /* add_action('after_setup_theme', function() {
        add_theme_support('title-tag');
    }); */

    //Another way
    
    function montheme_support () {
        add_theme_support('title-tag');
    }
    
    
    add_action('after_setup_theme', 'montheme_support'); 
    
   