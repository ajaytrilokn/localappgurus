<?php

function load_parent_style()
{
    $parent = 'twentytwenty-style';
    $theme = wp_get_theme();

    wp_enqueue_style($parent,get_template_directory_uri() . '/style.css',array(),$theme->parent()->get('Version'));

    wp_enqueue_style('child-style',get_stylesheet_uri(),array($parent),$theme->get('Version'));
}
add_action('wp_enqueue_scripts','load_parent_style');
?>