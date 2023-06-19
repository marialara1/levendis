<?php

//  CARGAR ESTILOS Y SCRIPTS

    function my_scripts_and_styles()
    {
        if ( !is_admin() )
        {

            // css

            
            wp_register_style (
                'inter',
                'https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap'
            );

            wp_enqueue_style ( 'inter' );
            
            wp_register_style (
                'css',
                get_stylesheet_uri() 
            );

            wp_enqueue_style ( 'css' );

            //js

            wp_register_script (
                'jquery',
                'https://code.jquery.com/jquery-3.6.4.min.js'
            );

            wp_enqueue_script ( 'jquery' );

            wp_register_script (
                'scripts',
                get_bloginfo ( 'template_url' ) . '/index.js'
            );

            wp_enqueue_script ( 'scripts' );
           
        }
    }

    add_action ( 'wp_enqueue_scripts', 'my_scripts_and_styles' );
    ?>
