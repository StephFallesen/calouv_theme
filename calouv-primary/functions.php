<?php
/* Tilføjer CSS & JS */
function woocommerce_custom_theme() {
    wp_register_style( 'custom_css', get_template_directory_uri() . '/css/style.css', false, '1.0.0' );
    wp_register_style( 'stolzl_cdn', 'https://use.typekit.net/bjt7zcc.css', false, '1.0.0' );
    wp_register_style( 'playfair_cdn', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;1,700&display=swap', false, '1.0.0' );

    wp_enqueue_style( 'custom_css' );
    wp_enqueue_style( 'stolzl_cdn' );
    wp_enqueue_style( 'playfair_cdn' );

    wp_enqueue_script( 'main-scripts',  get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'woocommerce_custom_theme' );


/* Tilføjer Menuer */
register_nav_menus(
    array(
        'top-menu' => 'Primary',
        'bottom-menu' => 'Secondary'
        )
    );

/* WooCommerce */
if (class_exists('WooCommerce')) {

    /* WooCommerce Support */
    function woocommerceshop_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    add_action ( 'after_setup_theme', 'woocommerceshop_add_woocommerce_support' );

    // Fjerner Shop Title
    add_filter( 'woocommerce_show_page_title', '__return_false' );

    // Tilføjer Support
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    /* Fjerner product meta */
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );


    //Fjerner product data tabs
  
    add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

    function woo_remove_product_tabs( $tabs ) {

        unset( $tabs['reviews'] ); 	// Fjerner reviews tab

        return $tabs;
    }

     //Omdøber tabs navne
    
    add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
    function woo_rename_tabs( $tabs ) {

        $tabs['description']['title'] = __( 'Beskrivelse' );
        $tabs['additional_information']['title'] = __( 'Mere Information' );

        return $tabs;

    }	
}
