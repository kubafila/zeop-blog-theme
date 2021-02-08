
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

<article class="post">
<?php 
  the_post_thumbnail();
  the_content();
?>

</article>