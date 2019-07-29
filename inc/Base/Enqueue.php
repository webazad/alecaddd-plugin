<?php
namespace Inc\Base;

use \Inc\Base\BaseController;

if ( ! class_exists( 'Enqueue' ) ) :

    class Enqueue extends BaseController{
        public $countries = null;
        public function __construct() {
            parent::__construct();
        }
        public function register() {
            add_action('admin_enqueue_scripts',array($this,'enqueue'));            
        }
        public function enqueue() {
            wp_register_style('style',$this->plugin_url . 'assets/css/style.css',null,'8','all');
            wp_enqueue_style('style');
            wp_register_script('script',$this->plugin_url . 'assets/js/script.js', null,'9',true);
            wp_enqueue_script('script');
        }
        public function __destruct() {}
    }
endif;