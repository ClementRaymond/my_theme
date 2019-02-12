<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <!-- Appel du fichier style.css de notre thème -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Kaushan+Script|Mr+Dafoe" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_enqueue_script('jquery'); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="picture_header">
          <img src="<?php echo THEME_URL;?>/images/bar1.jpg" alt="photo comptoire bar">
          <header id="header" class="header">
            <h1>logo</h1>
            <?php
              $aw_menu = array(
                'theme_location' => 'header', // nom du slug
                'menu' => 'header_fr', // nom à donner cette occurence du menu
                'menu_class' => 'header__menu', // class à attribuer au menu
                'menu_id' => 'menu_id', // id à attribuer au menu
                'container' => 'header__container'
              );
              wp_nav_menu($aw_menu);
            ?>
          </header>
        </div>
