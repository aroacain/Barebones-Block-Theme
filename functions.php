<?php

function ourtheme_files() {
    // Google Fonts
    // Remember to enqueue one font per line, that is, each font separately
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,400&display=swap');
    // Font Awesome
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
    // Slick Carousel
    wp_enqueue_style('slick-styles', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), true);

    // Compiled js and css files
    wp_enqueue_script('our-main-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('our-main-styles', get_theme_file_uri('/build/index.css'));
    }

add_action('wp_enqueue_scripts', 'ourtheme_files');

function ourtheme_features() {
    // Title tag
    add_theme_support('title-tag');
    // Custom logo
    add_theme_support( 'custom-logo' );
    // Hide core patterns
    remove_theme_support('core-block-patterns');
    // Add support for block styles.
	add_theme_support( 'wp-block-styles' );
    // Footer locations
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocation', 'Footer Menu Location');
    }

add_action('after_setup_theme', 'ourtheme_features');

// Register editor stylesheet
function wpdocs_theme_add_editor_styles() {
    add_editor_style( '/build/index.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

// Custom patterns

function ourtheme_register_patterns() {
    register_block_pattern_category(
        'layouts',
        array( 'label' => __( 'Custom Theme Layouts', 'pwmw' ) )
    );
  include 'custom-patterns/sample.php';
}
 
add_action( 'init', 'ourtheme_register_patterns' );

// Custom components

function ourtheme_register_components() {
    register_block_pattern_category(
        'components',
        array( 'label' => __( 'Custom Theme Components', 'pwmw' ) )
    );
    // include 'custom-components/three-slide-carousel.php';
}
 
add_action( 'init', 'ourtheme_register_components' );

// Create custom block category
function ourtheme_block_categories( $categories ) {
    return array_merge(
        $categories,
        [
            [
                'slug'  => 'custom-blocks',
                'title' => __( 'Custom Theme Blocks', 'pwmw' ),
                'icon' => 'schedule'
            ],
        ]
    );
}
add_action( 'block_categories_all', 'ourtheme_block_categories', 10, 2 );