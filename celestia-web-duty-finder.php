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
 
class CW_DF_DutyFinder {    
  static $instance = null;
  public static function getInstance() {
    if(self::$instance === null) {
      self::$instance = new CW_DF_DutyFinder();
    }
    return self::$instance;
  }
  private function __construct() {
    CW_DF_Classes::getInstance();
    echo '<!-- here -->';
  }
} 

add_action("plugins_loaded", array(CW_DF_DutyFinder, 'getInstance'));