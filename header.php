<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/main.css" type="text/css" media="all">
    <!-- JS -->
    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Vesper+Libre&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&amp;subset=latin-ext" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="page-header-container">
      <header id="page-header">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <h2><?php bloginfo( 'description' ); ?></h2>
        <?php wp_nav_menu( array( 'theme_location' => 'primary',
                                  'container' => 'nav',
                                  'container_class' => 'primary-menu',
                                  'menu_class' => 'primary-menu',
                                  'container_id' => 'primary-menu' ) ); ?>
      </header>
    </div>
  <!-- body -->
