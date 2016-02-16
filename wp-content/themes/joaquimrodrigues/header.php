<?php
/**
 * The template for displaying the header
 *
 */
?>


<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js"  lang="pt-BR" >
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="pt-BR" >
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html class="no-js" lang="pt-BR">
<!--<![endif]-->
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.css" charset="utf-8">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" charset="utf-8">
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
