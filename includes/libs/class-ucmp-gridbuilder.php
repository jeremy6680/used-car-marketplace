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
	  
		include( plugin_dir_path( __FILE__ ).'../../templates/partials/car-tease.php');
	  
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