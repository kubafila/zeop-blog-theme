<?php 
  get_header();
?>

<main>
  <h1 class="post__title"><?php  the_title() ?></h1> 
  
  <?php 
  
    if( have_posts() ){
      while( have_posts() ){
          the_post();
          get_template_part( 'template-parts/content', 'page' );
      }
    }
  ?>  


  <?php 
  get_footer();
?>