<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

class CW_DF_Classes {  
  static $instance = null;
  public static function getInstance() {
    if(self::$instance === null) {
      self::$instance = new CW_DF_Classes();
    }
    return self::$instance;
  }
  private function __construct() {
  }
}