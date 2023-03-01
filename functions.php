<?php

function anker_assets() {
    wp_enqueue_style( 'font-livvic', '//fonts.googleapis.com/css2?family=Livvic:wght@200;300;400;500;600;700;900&family=Outfit:wght@700&family=Saira:wght@300;400;500;600&display=swap', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'boxi-icons', '//unpkg.com/boxicons@2.1.4/css/boxicons.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'mork-style-css', '//moerk.de/wp-content/themes/mork/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'mork-custom-style-css', '//moerk.de/wp-content/themes/mork/styles/moerkDmCustom.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/main-style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style-theme', get_stylesheet_uri() );

    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'anker_assets' );

?>
