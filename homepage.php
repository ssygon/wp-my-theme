<?php /* Template Name: Home Page */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


get_header();

while ( have_posts() ) :
	the_post();
?>

<main>
  <section class="full-bleed pt-0 pb-0">
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
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div>
        col 1
      </div>
      <div>
        col 2
      </div>
      <div>
        col 3
      </div>
    </div>
  </section>

</main>


<?php
endwhile;

get_footer();