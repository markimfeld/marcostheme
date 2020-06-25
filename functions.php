<?php

    /**
    * Register Custom Navigation Walker
    */
    function register_navwalker(){
        require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';
    }
    add_action( 'after_setup_theme', 'register_navwalker' );
    
    function marcostheme_add_theme_scripts() {
        wp_enqueue_style('marcostheme-fontawesome', get_template_directory_uri() . '/assests/vendor/fontawesome/css/all.min.css');
        wp_enqueue_style( 'marcostheme-bootstrap', get_template_directory_uri() . '/assests/vendor/bootstrap/css/bootstrap.min.css');
        wp_enqueue_style('marcostheme-style', get_stylesheet_uri(), array('marcostheme-bootstrap'));
        wp_enqueue_script('marcostheme-jquery', get_template_directory_uri() . '/assests/vendor/jquery/jquery-3.5.1.js');
        wp_enqueue_script( 'marcostheme-bootstrap-js', get_template_directory_uri() . '/assests/vendor/bootstrap/js/bootstrap.min.js', array ( 'marcostheme-jquery' ), 4.5, true);
        wp_enqueue_script( 'marcostheme-script', get_template_directory_uri() . '/assests/js/main.js', array ( 'marcostheme-jquery' ), 1.0, true);
    }
    add_action( 'wp_enqueue_scripts', 'marcostheme_add_theme_scripts' );


    function marcostheme_setup() {
        // featured image support
        if ( function_exists( 'add_theme_support' ) ) {
            add_theme_support( 'post-thumbnails' );
        }


        // add title 
        add_theme_support('title-tag');
    }
    
    add_action('after_setup_theme', 'marcostheme_setup');


    function marcostheme_widgets() {
        register_sidebar(
            array(
                'id' => 'widgets-right',
                'name' => __('Right Sidebar'),
                'description' => __('Arrastra lo que quieras...'),
                'before_widget' => '<div class="card-body my-4 mt-lg-0 mb-lg-4 shadow-sm bg-white sidebar-right">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="card-title text-center h5">',
                'after_title' => '</h4><hr>'
            )
        );
    }
    add_action('widgets_init', 'marcostheme_widgets');

    function marcostheme_register_my_menus() {
        register_nav_menus(
            array(
                'primary-menu' => __( 'Menu superior' ),
            )
        );
    }
    
    add_action( 'init', 'marcostheme_register_my_menus' );

    function isa_comment_reform ($arg) {
        $arg['title_reply'] = __('Dejar un comentario:');
        return $arg;
    }

    add_filter('comment_form_defaults','isa_comment_reform');
?>