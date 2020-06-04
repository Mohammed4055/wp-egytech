<?php
    /*
    ** bootstrap nav include
    */
    include_once('WP-Bootstrap-Navwalker.php');
    /*  function to add style
    **  wp_enqueue_style( 'style-css' , get_template_directory_uri() . 'assets/css/style.css' );
    */
    function add_styles(){
        wp_enqueue_style( 'fontawsomecss' , get_template_directory_uri() . '/assets/css/all.min.css' );
        wp_enqueue_style( 'bootstrapcss' , get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'stylecss' , get_template_directory_uri() . '/assets/css/style.css' );
    }
    /*  function to add script befor closing of body tag
    **  wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . 'assets/js/bootstrap.min.js' , array() , false , true );
    */
    function add_scripts(){
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery' , includes_url('/js/jquery/jquery.js') , false , '' , true );
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/assets/js/bootstrap.min.js' , array('jquery') , false , true );
        wp_enqueue_script( 'main-js' , get_template_directory_uri() . '/assets/js/main.js' , array() , false , true );
    }

    /* menus
    ** function to add menu
    ** register_nav_menu()
    */
    function add_menu(){
        register_nav_menus(array(
            'Navbar' => 'Navigation Bar',
            'Footer' => 'Footer Menu'
        ));
    }
    function display_the_nav_menu(){
        wp_nav_menu(array(
            'menu_class'                    => 'nav navbar-nav ml-aut',
            'container_class'               => 'container',
            'walker'                        => new WP_Bootstrap_Navwalker()
        ));
    }
    /*  add functios to the system
    **  add_action('wp_enqueue_scripts','add_styles')
    */
    add_action('wp_enqueue_scripts','add_styles');
    add_action('wp_enqueue_scripts','add_scripts');
    add_action('init','add_menu');