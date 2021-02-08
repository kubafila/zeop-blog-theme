<?php 

  function zeop_theme_support(){
    add_theme_support('title-tag');
    // add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
  }

  add_action('after_setup_theme', 'zeop_theme_support');

  function zeop_register_styles(){
    $theme_data = wp_get_theme();
    $version = $theme_data->get( 'Version' );

    wp_enqueue_style('zeop-category', get_template_directory_uri() . "/styles/category.css", array(), $version,'all');
    wp_enqueue_style('zeop-cateogires-menu', get_template_directory_uri() . "/styles/cateogires-menu.css", array(), $version,'all');
    wp_enqueue_style('zeop-contact', get_template_directory_uri() . "/styles/contact.css", array(), $version,'all');
    wp_enqueue_style('zeop-general', get_template_directory_uri() . "/styles/general.css", array(), $version,'all');
    wp_enqueue_style('zeop-hamburger', get_template_directory_uri() . "/styles/hamburger.css", array(), $version,'all');
    wp_enqueue_style('zeop-hero', get_template_directory_uri() . "/styles/hero.css", array(), $version,'all');
    wp_enqueue_style('zeop-lista', get_template_directory_uri() . "/styles/lista.txt", array(), $version,'all');
    wp_enqueue_style('zeop-menu', get_template_directory_uri() . "/styles/menu.css", array(), $version,'all');
    wp_enqueue_style('zeop-social', get_template_directory_uri() . "/styles/social.css", array(), $version,'all');
    wp_enqueue_style('zeop-post', get_template_directory_uri() . "/styles/post.css", array(), $version,'all');
    wp_enqueue_style('zeop-google-fonts','https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap', array(), "1.0",'all');
    
  }
  add_action('wp_enqueue_scripts','zeop_register_styles');


  function zeop_register_scripts(){
    wp_enqueue_script('zeop-hamburger', get_template_directory_uri() . "/scripts/hamburger.js", array(), "2.0", true);
  }
  add_action('wp_enqueue_scripts','zeop_register_scripts');



  function zeop_get_recent_posts($attr){
        $args = array( 'numberposts' => '5', 'category' => $attr['category'] );

        $recent_posts = wp_get_recent_posts( $args );
        $entry = "";
        foreach( $recent_posts as $recent ){
          $post_ID = $recent["ID"];

          $entry .= '<li class="category__list-item"><a href="'.get_permalink($post_ID).' " class="category__list-link">'.get_the_title( $post_ID).'</a></li>';
          
          
           

        }


    return $entry;
  }

  add_shortcode( 'posts', 'zeop_get_recent_posts' );
?>