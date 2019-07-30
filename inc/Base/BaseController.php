<?php
namespace Inc\Base;
// EXIT IF ACCESSED DIRECTLY
defined('ABSPATH') || exit;

if ( ! class_exists( 'BaseController' ) ) :

    class BaseController{
        public $plugin_path;
        public $plugin_url;
        public $plugin;
        public $managers = array();
        public function __construct() {
            $this->plugin_path = plugin_dir_path(dirname(__FILE__, 2));
            $this->plugin_url = plugin_dir_url(dirname(__FILE__, 2));
            $this->plugin = plugin_basename(dirname(__FILE__, 3)).'/alecaddd-plugin.php';
            
            $this->managers = array(
                'cpt_manager'           => 'Activate CPT Manger',
                'taxonomy_manager'      => 'Activate Taxonomy Manger',
                'media_widget'          => 'Activate Media Widget',
                'gallery_manager'       => 'Activate Gallery Manger',
                'testimonial_manager'   => 'Activate Testimonial Manager',
                'templates_manager'     => 'Activate Templates Manager',
                'login_manager'         => 'Activate Login Manager',
                'membership_manager'    => 'Activate Membership Manager',
                'chat_manager'          => 'Activate Chat Manger'
            );
        }
        //public static function custom() {}
        //public static function __destruct() {}
    }
endif;