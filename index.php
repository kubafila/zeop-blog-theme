<?php 
  get_header();

  $zeop_title = get_the_title( get_option('page_for_posts', true) );

?>

<main>
  <h1 class="post__title"><?php echo $zeop_title ?></h1> 
  
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