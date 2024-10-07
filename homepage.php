<?php /* Template Name: Home Page */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


get_header();

while ( have_posts() ) :
	the_post();
?>

<main>
  <section class="full-bleed">
    <?php
      $alternativeTitleH1 = get_field('alternative_title_h1');
      $banner_image_desktop = get_field('banner_image_desktop');
    ?>
    <div class="page-banner">
      <div class="page-banner-wrapper">
        <img class="banner-image-desktop" src="<?php echo $banner_image_desktop; ?>"/>
        <div class="page-banner-content">
          <div class="page-banner-content-wrapper">
            <?php if ($alternativeTitleH1 != '') : ?>
              <?php echo '<h1 class="page-title">' . $alternativeTitleH1 . '</h1>' ?>
            <?php else: ?>
              <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
            <?php endif; ?>    
            <div class="cta-wrapper">
              <div class="back-to-bottom">
                <a href="#" class="scroll-to-bottom"">
                </a>
              </div>
              <a href="#" class="btn-primary">
                Learn More<span></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    inner content
  </section>

  <section class="full-bleed">
    full bleed content
  </section>

  <section>
    inner content
  </section>

  <?php  
/*
  <section>
    <div class="inner-section">
      <div class="instagram-feed">
        <h2>Instagram Recent Posts [test short_code]</h2>
        <?php echo do_shortcode('[instagram_recent_posts]'); ?>
      </div>
    </div>
  </section>
*/
?>

</main>


<?php
endwhile;

get_footer();