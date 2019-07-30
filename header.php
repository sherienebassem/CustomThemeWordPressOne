<!DOCTYPE html>
<html l<?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( $show = 'charset' ); ?>">
    <!-- not needed title because iam using function wp_head(); -->
    <!-- <title>Wordpress customtheme</title> -->
    <?php wp_head(); ?>
  </head>
  <!-- using body_class(  ); because I know any bage my using in futur -->
  <body <?php body_class(  ); ?>>
