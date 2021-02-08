<?php 
  get_header();
?>

<section class="hero hero--full">
  <div class="hero__inner">
    <div class="hero__title-container">
      <h1 class="hero__title">BLOG</h1> 
      <p class="hero__subtitle">Stowarzyszenia Z energią o prawie</p>
    </div>
    <div class="hero__post">
      <p class="hero__post-heading">Najnowszy wpis</p>
      <p class="hero__post-body">
    <?php
        $args = array( 'numberposts' => '1' );
        $recent_posts = wp_get_recent_posts( $args );
        foreach( $recent_posts as $recent ){
          $post_ID = $recent["ID"];
          echo '<a href="' . get_permalink($post_ID) . '">'. get_the_excerpt($post_ID).'</a>';
   
        
        }
    ?>
    </p>
    </div>
  </div>
</section>
<main>
  <?php 
  
    if( have_posts() ){
      while( have_posts() ){
          the_post();
          the_content();
      }
    }
  ?>  


  <?php 
  get_footer();
?>