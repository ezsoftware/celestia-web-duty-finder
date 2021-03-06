<?php
/**
 * Plugin Name: Duty Finder
 * Description: Duty Finder by Celestia FC on Hyperion
 * Version: 0.1 (06/15/2017)
 * Author: John Ryan - EZ Software Inc
 * Author URI: http://celestiaxiv.com
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require_once 'classes/index.php';

define("CW_DF_ABSPATH", plugin_dir_path(__FILE__));
define("CW_DF_URLPATH", plugin_dir_url(__FILE__));
 
class CW_DutyFinder {    
  static $instance = null;
  public static function getInstance() {
    if(self::$instance === null) {
      self::$instance = new CW_DutyFinder();
    }
    return self::$instance;
  }
  private function __construct() {
    CW_DF_Classes::getInstance();

    add_action("wp_enqueue_scripts", array($this, 'enqueue_scripts_styles'));
    add_action("admin_enqueue_scripts", array($this, 'admin_enqueue_scripts_styles'));
  }

  public function enqueue_scripts_styles() {
    wp_enqueue_style('celestiaWeb-DutyFinder_css', CW_DF_URLPATH . 'css/styles.css');
    wp_enqueue_script('celestiaWeb-DutyFinder_js', CW_DF_URLPATH . 'js/main.js');
  }
  public function admin_enqueue_scripts_styles() {
    wp_enqueue_style('celestiaWeb-DutyFinder_admin_css', CW_DF_URLPATH . 'css/admin_styles.css');
  }
} 

add_action("plugins_loaded", array('CW_DutyFinder', 'getInstance'));