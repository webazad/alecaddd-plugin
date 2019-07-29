<?php
namespace Inc\Base;
// EXIT IF ACCESSED DIRECTLY
defined('ABSPATH') || exit;

if ( ! class_exists( 'BaseController' ) ) :

    class BaseController{
        public $plugin_path;
        public $plugin_url;
        public $plugin;
        public function __construct() {
            $this->plugin_path = plugin_dir_path(dirname(__FILE__, 2));
            $this->plugin_url = plugin_dir_url(dirname(__FILE__, 2));
            $this->plugin = plugin_basename(dirname(__FILE__, 3)).'/alecaddd-plugin.php';
        }
        public static function activate() {
        }
        public function register() {            
            add_action('wp_enqueue_scripts',array($this,'enqueue'));            
            add_filter('plugin_action_links-'.$this->plugin_basename,array($this,'settings_links'));
        }
    }
endif;