<?php
/*
Plugin Name: Used-Car Marketplace
Description: Plugin to add a used-car marketplace to your website
Author: Jeremy Marchandeau
Author URI: https://jeremymarchandeau.com
Version: 1.0
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/


class UsedCarMarketPlace {
  private static $instance;

  const FIELD_PREFIX = 'wpfc_';

  const CPT_SLUG = 'car'; 

  const TEXT_DOMAIN = 'wpfc-cars';

  public static function getInstance() {
    if (self::$instance == NULL) {
      self::$instance = new self();
    }

    return self::$instance;
  }

  private function __construct() {

    // initialize custom post types
    include( 'includes/init.php' );

    // initialize custom post types
    include( 'includes/libs/class-ucmp-gridbuilder.php' );

    // include( 'includes/register-plugins.php' );
    require_once( plugin_dir_path( __FILE__) . "/includes/libs/class-tgm-plugin-activation.php" );

    add_action( 'tgmpa_register', 'register_required_plugins' );

    add_action('init', 'UsedCarMarketPlace::register_post_type' );

    add_action('init', array( $this, 'custom_taxonomies' ) );

    add_filter( 'rwmb_meta_boxes', array( $this, 'custom_fields' ) );

    add_filter( 'rwmb_meta_boxes', array( $this, 'settings_custom_fields' ) );

    add_filter( 'mb_settings_pages', array( $this, 'add_settings_page' ) ); 

    add_action( 'template_include', array( $this, 'add_cpt_template' ) );

    add_action( 'wp_enqueue_scripts', array( $this, 'add_styles_scripts' ) );

  }

  /**
   *
   * Defined statically for use in activation hook
   */
  public static function register_post_type() {
      require('includes/custom/custom-post-type.php'); 
  }

  /**
   * Activation hook (see register_activation_hook)
   */
  public static function activate() {
    self::register_post_type();
    flush_rewrite_rules();
  }

  /**
   * Create custom taxonomies
   */
  function custom_taxonomies() {
    require('includes/custom/custom-taxonomies.php'); 
  }

  /**
   * Create custom fields
   */  
  function custom_fields( $meta_boxes ) {
    require('includes/custom/custom-fields.php'); 
    return $meta_boxes;
  }

  /**
   * Create custom fields
   */  
  public function settings_custom_fields( $meta_boxes ) {
    require('includes/back/settings-custom-fields.php'); 
    return $meta_boxes;
  }

  /**
   * Add a settings page
   */  
  public function add_settings_page( $settings_pages ) {
    require('includes/back/add-settings-page.php');
    return $settings_pages;
  }

  /**
   * Add a custom template
   */
  function add_cpt_template( $template ) {
    if (is_singular( self::CPT_SLUG)) {
      // check the active theme directory
      if (file_exists( get_stylesheet_directory() . 'single-' . self::CPT_SLUG . '.php')) {

          return get_stylesheet_directory() . 'single-' . self::CPT_SLUG . '.php';
      }

      // failing that, use the bundled copy
      return plugin_dir_path(__FILE__) . 'templates/single-' . self::CPT_SLUG . '.php';
  }

    if(is_archive( self::CPT_SLUG)) {
      if (file_exists( get_stylesheet_directory() . 'archive-' . self::CPT_SLUG . '.php')) {

          return get_stylesheet_directory() . 'archive-' . self::CPT_SLUG . '.php';
      }

      // failing that, use the bundled copy
      return plugin_dir_path(__FILE__) . 'templates/archive-' . self::CPT_SLUG . '.php';
    
  }
  
  return $template;   
  }

  /**
   * Enqueues the stylesheet for our CPT
   */
  function add_styles_scripts() {
    require('includes/front/enqueue.php');     
  }
  

}

UsedCarMarketPlace::getInstance();

register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );
register_activation_hook( __FILE__, 'UsedCarMarketPlace::activate' );  