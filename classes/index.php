<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require_once "duty_finder.php";

class CW_DF_Classes {  
  static $instance = null;
  public static function getInstance() {
    if(self::$instance === null) {
      self::$instance = new CW_DF_Classes();
    }
    return self::$instance;
  }
  private function __construct() {
    CW_DF_DutyFinder::getInstance();
  }
}