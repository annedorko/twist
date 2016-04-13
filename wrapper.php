<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
	<?php if ( is_singular() ) { wp_enqueue_script( 'comment-reply' ); } ?>
	<?php wp_head(); ?>
</head>
<body>
<header role="banner">
  <div class="container">
    <a href="<?php echo esc_url( home_url() )  ?>" class="logo">
      <!-- Tip: SVG logo goes well here! -->
		<?php bloginfo( 'name' ); ?>
    </a>
    <!--
    Tip: Uncomment this for mobile menus
    <a class="navigation-menu-button" id="js-mobile-menu"><i class="fa fa-bars"></i></a>
    -->
    <nav role="navigation">
		<?php wp_nav_menu( 'primary_menu' ); ?>
    </nav>
  </div>
</header>
<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <?php /* Main content goes here! */ ?>
        <?php include twist_template_path(); ?>
    </div>
</main>
<footer>
  <div class="container">
    <p>Twist: a Starter Theme is built by <a href="http://www.annedorko.com/">Anne Dorko</a></p>
  </div>
</footer>
</body>
<?php wp_footer(); ?>
</html>
