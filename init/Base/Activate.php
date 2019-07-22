<?php
namespace Inc\Base;
// EXIT IF ACCESSED DIRECTLY
defined('ABSPATH') || exit;

if ( ! class_exists( 'Activate' ) ) :

    class Activate{
        public $countries = null;
        public function __construct() {
        }
        public static function activate() {
        }
        public static function register() {            
            add_action('wp_enqueue_scripts',array($this,'enqueue'));            
            add_filter('plugin_action_links-'.$this->plugin_basename,array($this,'settings_links'));
        }
    }
endif;