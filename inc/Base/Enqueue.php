<?php
namespace Inc\Base;

use \Inc\Base\BaseController;

if ( ! class_exists( 'Enqueue' ) ) :

    class Enqueue extends BaseController{
        public $countries = null;
        public function __construct() {}
        public function register() {
            add_action('wp_enqueue_scripts',array($this,'enqueue'));            
        }
        public function enqueue() {
            wp_register_style('id',$this->plugins_url . '/assets/style.css','dep','version','bool');
            wp_enqueue_style('id');
            wp_register_script('id',$this->plugins_url . '/assets/style.css', 'dep','version','bool');
            wp_enqueue_script('id');
        }
        public function __destruct() {}
    }
endif;