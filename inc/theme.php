<?php
namespace inc\Theme;

    class RXWP {
        public function __construct() {
            //Import dependencies
            require_once 'sidebars.php';
            require_once 'rxwp.options.php';
            require_once 'styles.generate.php';

            if(function_exists('add_theme_support')) {	
                add_theme_support('menus');
                add_theme_support('widgets');
                add_theme_support('post-thumbnails');

                add_image_size('large', 700, '', true); // Large Thumbnail
                add_image_size('medium', 250, '', true); // Medium Thumbnail
                add_image_size('small', 120, '', true); // Small Thumbnail
                add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
            }

            new \inc\Theme\Sidebars\Init();
            new \inc\Theme\Options\Customizer();
            new \inc\Theme\Styles\Generator();
            
            RXWP::integrateScripts();
            RXWP::integrateStylesandFonts();

        }

        public static function integrateScripts() {
            add_action('wp_enqueue_scripts', function() {
                wp_deregister_script( 'jquery' );
                wp_enqueue_script('jquery',get_template_directory_uri().'/assets/js/jquery-2.1.4.min.js',false,null,true);
                wp_enqueue_script('jquery.easing',get_template_directory_uri().'/assets/js/jquery.easing.1.3.js',false,null,true);
                wp_enqueue_script('font-awesome','https://use.fontawesome.com/fd1d26097b.js','',false,false);
                wp_enqueue_script('theme',get_template_directory_uri().'/assets/js/theme.js',false,null,true);
                //wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js',false,null,true);
            });
        }

        public static function integrateStylesandFonts() {
            add_action('wp_enqueue_scripts', function() {
                wp_enqueue_style('base',get_template_directory_uri().'/assests/css/base.css','');
                wp_enqueue_style('theme',get_template_directory_uri().'/style.css','base-style');
            });
        }
    }