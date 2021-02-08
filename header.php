<!DOCTYPE html>
<html lang="pl" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php 
    wp_head();
  ?>
</head>
<body>
  <a href="" id="top" ></a>
  <button type="button" class="hamburger hamburger--open">
    <span class="hamburger__box"></span>
  </button>
  <nav class="menu" >
      <input type="text" class="menu__search menu__search--hidden" placeholder="Szukaj na blogu">
      
      <ul class="menu__list">
        <li class="menu__item"><a href="https://zeop.pl/blog" class="menu__link">Blog</a></li>
        <li class="menu__item"><a href="https://zeop.pl/blog/o-nas" class="menu__link">O Nas</a></li>
        <li class="menu__item social__icons">
            <a href="https://www.facebook.com/zeop.news/" class="social__link "><div class=" social__image social__image_fb"></div></a>
            <a href="https://twitter.com/zeoppl" class="social__link "><div class=" social__image social__image_tw "></div></a>
            <a href="https://www.linkedin.com/company/zeoppl/" class="social__link "><div class=" social__image social__image_linkedIn"></div></a>
            <a href="https://www.instagram.com/zeop_news/" class="social__link "><div class=" social__image social__image_ig "></div></a>
        </li>
        <li class="menu__item"><a href="https://zeop.pl/blog/wpisy/" class="menu__link">Wpisy</a></li>
        <li class="menu__item menu__item-contact"><a href="#contact" class="menu__link">Kontakt</a></li>
      </ul>
      <?php get_search_form(); ?>
      
  </nav>

