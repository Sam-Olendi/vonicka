<!DOCTYPE html>
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- page title -->
  <title>
    <?php 
    
      global $page, $paged;
      wp_title( '-', true, 'right' );

      bloginfo( 'name' );

      $site_description = get_bloginfo( 'description', 'display' );
      if ( $site_description && ( is_home() || is_front_page() ) )
        echo " - $site_description";

      if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'shape' ), max( $paged, $page ) );

    ?>
  </title>
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">

  <!-- import fonts from google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet">

  <!-- extra wordpress magic -->
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <header class="header">
    <div class="header-blacktop">
      <nav class="header-blacktop-sharing">
        <a href="https://www.facebook.com/pg/vonickascloset/about/?ref=page_internal" class="header-blacktop-sharing-link" target="_blank"><i class="icon-facebook"></i></a>
        <a href="https://www.instagram.com/vonicka/?hl=en" class="header-blacktop-sharing-link"><i class="icon-instagram"></i></a>
        <a href="https://twitter.com/VonickaClaire" class="header-blacktop-sharing-link"><i class="icon-twitter"></i></a>
        <a href="https://www.pinterest.com/vonickac/" class="header-blacktop-sharing-link"><i class="icon-pinterest-p"></i></a>
      </nav>
      <form method="get" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-blacktop-search">
        <input type="search" placeholder="Search..." class="header-blacktop-search-bar" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s">
        <button href="#" class="header-blacktop-search-icon" type="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'swill' ); ?>"><i class="icon-search"></i></button>
      </form>
    </div>

    <h1 class="header-logo"><a href="<?php echo home_url( '/' ); ?>" class="header-logo-link">Vonicka's Closet</a></h1>
    
    <?php  
    
      wp_nav_menu( [
        'theme_location'  => 'primary',
        'container'       => false,
        'menu_class'      => 'header-navigation'
      ]);

    ?>
  </header>