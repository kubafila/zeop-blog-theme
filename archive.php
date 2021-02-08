<?php 
  get_header();
?>

<main>
  <h1 class="post__title">Lista wpisów</h1> 

  <?php 
  
    if( have_posts() ){
      while( have_posts() ){
          the_post();
          get_template_part( 'template-parts/content', 'archive' );
      }
    }
  ?>  



  <?php 
  the_posts_pagination();
  get_footer();
?>