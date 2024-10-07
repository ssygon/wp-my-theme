<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<header id="site-header">
  <div class="section">

    <div class="site-brand">
      <?php if ( has_custom_logo() ) : ?>
        <div class="logo">
          <?php the_custom_logo(); ?>
        </div>
      <?php endif; ?>
    </div>

    <nav class="site-nav">
      <?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>
    </nav>
    <nav class="site-nav-mobile">
      <svg viewBox="0 0 24 24" width="34" height="34" xmlns="http://www.w3.org/2000/svg"><path d="m0 0h24v24h-24z" fill="none"/><path d="m3 18h18v-2h-18zm0-5h18v-2h-18zm0-7v2h18v-2z"/></svg>
    </nav>

  </div>
</header>


<?php