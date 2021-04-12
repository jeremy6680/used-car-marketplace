 <?php
/**
 * The template for displaying a single car
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<div class="container mx-auto px-4"> 

  <section class="py-12 px-4">
    <div class="flex flex-wrap -mx-8">
      <div class="lg:w-1/2 px-8 mt-6 lg:mt-0 order-2 lg:order-none">
        <h2 class="text-4xl mb-2 font-semibold font-heading"><?php the_title(); ?></h2>
        <p class="mb-6"><?php echo rwmb_meta( 'price' ); ?> € <?php _e( '(Ex. Tax)', 'wpfc-cars' ) ?></p>
        <p class="mb-8 text-gray-400 leading-relaxed"><?php echo rwmb_meta( 'description' ); ?></p>
        <table class="w-full mb-6">
          <tbody>
            <tr class="border-t">
              <td class="py-3">Brand</td>
              <td class="text-right"><?php echo rwmb_meta( 'brand' ); ?></td>
            </tr>
            <tr class="border-t">
              <td class="py-3">Model</td>
              <td class="text-right"><?php echo rwmb_meta( 'model' ); ?></td>
            </tr>
            <tr class="border-t">
              <td class="py-3">Year</td>
              <td class="text-right"><?php echo rwmb_meta( 'year' ); ?></td>
            </tr>
            <tr class="border-t">
              <td class="py-3">KM</td>
              <td class="text-right"><?php echo rwmb_meta( 'km' ); ?></td>
            </tr>
            <tr class="border-t">
              <td class="py-3">Weight</td>
              <td class="text-right"><?php echo rwmb_meta( 'weight' ); ?></td>
            </tr>
            <tr class="border-t">
              <td class="py-3">Length</td>
              <td class="text-right"><?php echo rwmb_meta( 'length' ); ?></td>
            </tr>
            <tr class="border-t">
              <td class="py-3">Width</td>
              <td class="text-right"><?php echo rwmb_meta( 'width' ); ?></td>
            </tr>
          </tbody>
        </table>
        <a href="mailto:<?php echo rwmb_meta( 'email' ); ?>" class="inline-block py-4 px-8 leading-none text-white bg-green-600 hover:bg-green-700 font-semibold rounded"><?php _e( 'Contact the owner', 'wpfc-cars' ) ?></a>
      </div>
      <div class="lg:w-1/2 px-8">
          <?php 
            $images = rwmb_meta( 'product_images', array( 'limit' => 1 ) );
            $image = reset( $images );
          ?>
        <img class="mb-4 rounded shadow" src="<?php echo $image['full_url']; ?>" alt="">
        <div class="flex flex-wrap -mx-2">
          <?php 
            $pictures = rwmb_meta( 'product_images', array( 'limit' => 3 ) );
            $picture = reset( $pictures );
            foreach ( $pictures as $picture ) { ?>
              <div class="w-1/3 px-2"><img class="rounded shadow" src="<?php echo $picture['full_url']; ?>" alt=""></div>
            <?php } ?>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
