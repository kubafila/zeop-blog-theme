<?php 
  get_header();
?>

<section class="hero ">
  <div class="hero__inner">
    <div class="hero__title-container">
      <h1 class="hero__title">BŁĄD 404</h1> 
      <p class="hero__subtitle">Strona o podanym adresie nie istnieje</p>
    </div>
    <div class="hero__post">
      <p class="hero__post-heading">Najnowszy wpis</p>
      <p class="hero__post-body">
    <?php
        $args = array( 'numberposts' => '1' );
        $recent_posts = wp_get_recent_posts( $args );
        foreach( $recent_posts as $recent ){
          $post_ID = $recent["ID"];
          echo '<a href="' . get_permalink($post_ID) . '">'. get_the_title( $post_ID).'</a>';
        
        }
    ?>
    </p>
    </div>
  </div>
</section>
<main>
  <?php 
  get_footer();
?>