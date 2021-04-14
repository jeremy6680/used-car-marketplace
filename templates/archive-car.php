 <?php
/**
 * The template for displaying all cars
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

 <div class="container mx-auto px-4"> 
    
      <div>
	      <section class="py-12 px-4 text-center">
	        <div class="w-full max-w-2xl mx-auto">
	          <h2 class="text-5xl mt-2 mb-6 leading-tight font-semibold font-heading"><?php _e( 'Our second hand cars', 'wpfc-cars' ) ?></h2>
	        </div>
	      </section>
      </div>
    
      <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
        <div class="w-full md:w-2/3 px-4 mb-4 md:mb-0">
	      <section class="px-4">
	          <?php echo do_shortcode('[wpgb_template id="cars_to_sell"]'); ?>
	      </section>
    	</div>
        <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">      
	      <div class="mb-6">
	        <?php echo do_shortcode('[wpgb_facet id="1" grid="cars_to_sell"]'); ?>
	      </div>
	       <div class="mb-6">
	        <?php echo do_shortcode('[wpgb_facet id="4" grid="cars_to_sell"]'); ?>
	      </div>
	       <div class="mb-6">
	        <?php echo do_shortcode('[wpgb_facet id="5" grid="cars_to_sell"]'); ?>
	      </div>
	      <div class="mb-6">
	        <?php echo do_shortcode('[wpgb_facet id="2" grid="cars_to_sell"]'); ?>
	      </div>
	       <div class="mb-6">
	        <?php echo do_shortcode('[wpgb_facet id="6" grid="cars_to_sell"]'); ?>
	      </div>
        </div>
      </div>
<?php get_footer();