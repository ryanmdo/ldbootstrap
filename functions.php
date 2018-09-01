

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



    function wpb_init_widgets($id){

        register_sidebar(array(

            'name'=> 'Widget Sidebar',
            'id'=>'sidebar',
            
            // sidebar-module is used because that is the class of the existing static
            // HTML siderbar divs
            // </div>, because it does need to be included
            'before_widget'=>'<div class="sidebar-module justify-right">',
            'after_widget'=>'</div>',

            //  Tags for titles for the widget also must be
            //  specified and defined
            'before_title'=>'<h3>',
            'after_title'=>'</h4>'

        ));


    }

    add_action('widgets_init', 'wpb_init_widgets');

    //Adding the custom header image

    $args = array(
        'width'         => 625,
        'height'        => 225,
        'flex-width'    => true,
        'flex-height'   => true,
        'default-image' => get_template_directory_uri() . '/images/ld-header-logo.png',
    );

    add_theme_support( 'custom-header', $args );

?>