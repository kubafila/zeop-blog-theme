
<section class="archive">
  <article class="archive__post">
    <div class="archive__post-header">
      <h2 class="archive__post-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>


    </div>

    <div class="archive__post-body">
      <?php 
        $post_ID = get_the_ID();

        if( has_post_thumbnail($post_ID) ){

          $imageURL = get_the_post_thumbnail_url($post_ID,'thumbnail');
          

          
          echo '<img src="'.$imageURL.'" class= "archive__post-thumbnail">';
          
        }
      ?>

        
      
      <div class="archive__post-excerpt">
              <div class="post__info">
        <p class="post__date post__property">
          <span class="post__property-name">Data: </span>
          <span class="post__property-value"><?php the_date() ?></span>
        </p>
        <p class="post_category post__property">
          <span class="post__property-name">Kategorie: </span>
        </p>
        <?php the_category() ?>
      </div>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink()?>" class="archive__post-button button-more">Czytaj więcej</a>
      </div>
      
    </div>
    
  </article>
</section>