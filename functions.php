

<?php
    //Register nav walker class alias
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
        // file does not exist... return an error.
        return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
    } else {
        // file exists... require it.
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }

    function ldbootstrap_theme_setup(){
        
        add_theme_support('post-thumbnails');

        //Nav Menus
        register_nav_menus( array(
            'primary' => __( 'Primary Menu','THEMENAME' ),
        ) );

    }


    add_action('after_setup_theme','ldbootstrap_theme_setup');




    //Excerpt Length

    function set_excerpt_length(){
        return 50;
    }

    add_filter('excerpt_length','set_excerpt_length');


    


?>