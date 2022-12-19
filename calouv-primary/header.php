<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <script href="<?php echo get_template_directory_uri();?>/scripts.js"></script>
    <?php wp_head(); ?>
    
</head>
<body <?php body_class('noscroll'); ?>> 


<header>
<div class="navbar">
        <div class="content">
            <div class="icon menu-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#836c5d" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-burger"><line x1="18" y1="10" x2="6" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="18" y1="18" x2="6" y2="18"></line></svg>
            </div>
            <a href="/"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a>
            <ul class="menu-list">
              <a class="icon cancel-btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#836C5D" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
              </a>
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'container' => '',
                        'menu_class' => 'top-menu'
                    )
                );
            ?>
            </ul>
            <div>
              <a href="/kurv" class="tools-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#836c5d" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>  </a>
              <a href="/min-konto"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#836C5D" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></a>
            <a href="/wordpress/favoritter"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#836C5D" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a>
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#836c5d" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>            
            </div>
          </div>
        <div class="search-form-container">
          <button type="button" class="back-button"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#836C5D" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
          <?php get_product_search_form();?>
        </div>
          </div>
</header>

<script>

    const navbar = document.querySelector(".navbar");
    const menu = document.querySelector(".menu-list");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    const noscroll = document.querySelector(".noscroll");
    const searchBtn = document.querySelector(".feather-search");
    const search = document.querySelector(".search-form-container");
    const backBtn = document.querySelector(".back-button");

    menuBtn.onclick = ()=>{
    menu.classList.add("active");
    menuBtn.classList.add("hide");
    noscroll.classList.add("active");
    }
    cancelBtn.onclick = ()=>{
    menu.classList.remove("active");
    menuBtn.classList.remove("hide");
    noscroll.classList.remove("active");
    }

    searchBtn.onclick = ()=>{
        search.classList.add("active");
        noscroll.classList.add("active");
    }
    backBtn.onclick = ()=>{
    search.classList.remove("active");
    noscroll.classList.remove("active");
    }
</script>

<?php echo do_shortcode( '[flexy_breadcrumb]'); ?> <br><br>


