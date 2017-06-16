<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

class CW_DF_DutyFinder {  
  static $instance = null;
  public static function getInstance() {
    if(self::$instance === null) {
      self::$instance = new CW_DF_DutyFinder();
    }
    return self::$instance;
  }

  static $template = null;
  private static function getTemplate() {
    if(self::$template === null) {
      self::$template = file_get_contents('../templates/duty_finder.html');
    }
    return self::$template;
  }

  private function __construct() {
    add_shortcode("cw_df_duty_finder", array($this, "cw_df_duty_finder_shorcode"));
  }

  public function cw_df_duty_finder_shorcode($atts) {
    $template = self::$template;

    return $template;
  }
}