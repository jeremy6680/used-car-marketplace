<?php

class UCMP_GridBuilder {
  private static $instance;

  public static function getInstance() {
    if (self::$instance == NULL) {
      self::$instance = new self();
    }

    return self::$instance;
  }

  private function __construct() {

	function prefix_register_template( $templates ) {
	    // 'my_template' corresponds to the template ID.
	    $templates['cars_to_sell'] = [
	      'class'              => '',
	      'source_type'        => 'post_type',
	      'is_main_query'      => false,
	      'query_args'         => [
	        'post_type'      => 'car',
	        'posts_per_page' => 10,
	      ],
	      'render_callback'    => 'prefix_render_callback',
	      'noresults_callback' => 'prefix_noresults_callback',
	    ];
	    return $templates;
	}

	add_filter( 'wp_grid_builder/templates', 'prefix_register_template', 10, 1 );

	/**
	 * This callback is called for each post in the loop.
	 *
	 * @param object $post Holds post, term or user object (depending of the source_type).
	 */
	function prefix_render_callback( $post ) {
	  
      $images = rwmb_meta( 'product_images', array( 'limit' => 1 ) );
      $image = reset( $images );
  
      $currency = rwmb_meta( 'currency', ['object_type' => 'setting'], 'General Settings' );
      $symbol = isset( $currency['symbol'] ) ? $currency['symbol'] : '';
      $position = isset( $currency['position_of_the_symbol'] ) ? $currency['position_of_the_symbol'] : '';
      ?>

	    <div class="w-full lg:w-1/2 px-4 mb-8">
	      <div class="relative rounded shadow">
	        <span class="absolute py-1 px-3 m-2 text-sm text-white font-semibold bg-green-600 rounded"><?php rwmb_the_value( 'condition' ); ?></span>
	        <img src="<?php echo $image['full_url']; ?>" alt="">
	        <div class="p-3">
	          <h3 class="font-heading"><a class="text-green-600" href="<?php the_permalink(); ?>"><?php rwmb_the_value( 'brand' ); ?> | <?php rwmb_the_value( 'model' ); ?></a></h3>
	          <span class="text-2xl"><?php if ($position == 'before'): echo $symbol; endif;?><?php echo rwmb_meta( 'price' ); ?> <?php if ($position == 'after'): echo $symbol; endif;?></span>
	        </div>
	      </div>
	    </div>
	  <?php
	  
	}

	/**
	 * This callback is called when no results match selected facets.
	 */
	function prefix_noresults_callback() {
	  
	  ?>
	  <p><?php esc_html_e( 'Sorry, no results match your search criteria.', 'text-domain' ); ?></p>
	  <?php
	  
	}
  }
}

UCMP_GridBuilder::getInstance();