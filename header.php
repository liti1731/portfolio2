<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Quicksand" rel="stylesheet">
    <?php  wp_head(); ?>
    </head>
    <body>
    	<?php wp_nav_menu(array("theme_location=> header-nav"))?>