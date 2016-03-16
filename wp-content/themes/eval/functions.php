<?php
// Ajouter les images à la une sur les articles
add_theme_support( 'post-thumbnails' );

// Ajouter un menu - Dupliquer la ligne pour ajouter d'autres menus
register_nav_menu('principal', 'Menu principal');
register_nav_menu('menu2', 'Menu secondaire');

// Créer des Custom Post Type
add_action( 'init', 'create_post_type' );

function create_post_type() {
    register_post_type('Service',
        array(
            'labels' => array(
                'name' => 'service',
                'singular_name' => 'Services'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );

    // Dupliquer le register_post_type pour ajouter d'autres CPT
    register_post_type('projet',
        array(
            'labels' => array(
                'name' => 'projet',
                'singular_name' => 'Projets'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );
}
