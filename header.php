<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo ('name'); ?></title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<?php wp_head (); ?>
</head>
<body <?php body_class (); ?>>
  <header class="row no-max pad main">
    <h1>
      <?php
        if (is_page ('6')) {
          bloginfo ('name');
        }
        else {
          wp_title ('', true, '');
        }
      ?>
    </h1>
    <!--<button class="hamburger">&#9776;</button>
    <button class="cross">&#735;</button>
    <nav>
     <?php
          /*$defaults = array (
           'container' => false,
           'theme_locations' => 'primary_menu',
           'menu_class' => 'menu'
         );*/

         wp_nav_menu ($defaults);
      ?>
    </nav>-->

  </header>
