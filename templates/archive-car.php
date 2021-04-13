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
      <section class="py-12 px-4">
        <h2 class="text-4xl text-center mb-8 font-semibold font-heading"><?php _e( 'Our second hand cars', 'wpfc-cars' ) ?></h2>
        <div class="flex flex-wrap -mx-4 -mb-8">
  			 <?php
  			 global $wp_query;
  			 if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            
              $images = rwmb_meta( 'product_images', array( 'limit' => 1 ) );
              $image = reset( $images );
          
              $currency = rwmb_meta( 'currency', ['object_type' => 'setting'], 'General Settings' );
              $symbol = isset( $currency['symbol'] ) ? $currency['symbol'] : '';
              $position = isset( $currency['position_of_the_symbol'] ) ? $currency['position_of_the_symbol'] : '';
              ?>
            <div class="w-full lg:w-1/4 px-4 mb-8">
              <div class="relative rounded shadow">
                <span class="absolute py-1 px-3 m-2 text-sm text-white font-semibold bg-green-600 rounded"><?php rwmb_the_value( 'condition' ); ?></span>
                <img src="<?php echo $image['full_url']; ?>" alt="">
                <div class="p-3">
                  <h3 class="font-heading"><a class="text-green-600" href="<?php the_permalink(); ?>"><?php rwmb_the_value( 'brand' ); ?> | <?php rwmb_the_value( 'model' ); ?></a></h3>
                  <span class="text-2xl"><?php if ($position == 'before'): echo $symbol; endif;?><?php echo rwmb_meta( 'price' ); ?> <?php if ($position == 'after'): echo $symbol; endif;?></span>
                </div>
              </div>
            </div>
  			 <?php endwhile;
  			 endif; ?>
        </div>
      </section>
    </div>

<?php get_footer();