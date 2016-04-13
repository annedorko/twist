<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
   <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
  <?php wp_head(); ?>
</head>
<body>
<header class="navigation" role="banner">
  <div class="navigation-wrapper">
    <a href="<?php echo esc_url( home_url() )  ?>" class="logo">
      <!-- SVG logo goes well here -->
      <?php bloginfo('name'); ?>
    </a>
    <a class="navigation-menu-button" id="js-mobile-menu"><i class="fa fa-bars"></i></a>
    <nav role="navigation">
      <?php wp_nav_menu( 'primary_menu' ); ?>
    </nav>
  </div>
</header>
<div class="container">
  <ul class="social-nav">
    <li><a href="" class="social-link facebook"><i class="fa fa-facebook-square"></i></a></li>
    <li><a href="" class="social-link linkedin"><i class="fa fa-linkedin-square"></i></a></li>
    <li><a href="" class="social-link twitter"><i class="fa fa-twitter-square"></i></a></li>
    <li><a href="" class="social-link instagram"><i class="fa fa-instagram"></i></a></li>
    <li><a href="" class="social-link email"><i class="fa fa-envelope-o"></i></a></li>
    <li><a href="" class="social-link rss"><i class="fa fa-rss-square"></i></a></li>
  </ul>
</div>
<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php /* Main content goes here! */ ?>
  <?php include twist_template_path(); ?>
</main>
<footer>
  <div class="container">
    <p>Twist: a Starter Theme is built by <a href="http://www.annedorko.com/">Anne Dorko</a></p>
  </div>
</footer>
</body>
<?php wp_footer(); ?>
</html>
