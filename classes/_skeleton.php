<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

class CW_DF_SKELETON {  
  static $instance = null;
  public static function getInstance() {
    if(self::$instance === null) {
      self::$instance = new CW_DF_SKELETON();
    }
    return self::$instance;
  }
  private function __construct() {

  }
}