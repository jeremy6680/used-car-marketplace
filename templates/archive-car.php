 <?php
/**
 * The template for displaying all cars
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>



<?php echo do_shortcode('[wpgb_facet id="1" grid="cars_to_sell"]'); ?>
<?php echo do_shortcode('[wpgb_facet id="2" grid="cars_to_sell"]'); ?>
<?php echo do_shortcode('[wpgb_facet id="3" grid="cars_to_sell"]'); ?>


<div class="container mx-auto px-4"> 
      <section class="py-12 px-4">
        <h2 class="text-4xl text-center mb-8 font-semibold font-heading"><?php _e( 'Our second hand cars', 'wpfc-cars' ) ?></h2>
          <?php echo do_shortcode('[wpgb_template id="cars_to_sell"]'); ?>
      </section>
    </div>

<?php get_footer();