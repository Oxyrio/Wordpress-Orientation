<?php
// Ajouter Image à la Une sur les articles
add_theme_support('post-thumbnails');

// Ajouter un menu
register_nav_menu('principal', 'Menu principal');

// Créer Custom Post Type
add_action( 'init', 'create_post_type' );
function create_post_type() {
   
    
    register_post_type('projet',
        array(
            'labels' => array(
                'name' => 'Projets',
                'singular_name' => 'Projet'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );

    register_post_type('service',
        array(
            'labels' => array(
                'name' => 'Services',
                'singular_name' => 'Service'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );
}
?>