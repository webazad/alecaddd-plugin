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
                'cpt_manager'           => array(
                    'title' => 'Activate CPT Manger',
                    'desc' => 'Custom post manager can be changed easily here',
                ),
                'taxonomy_manager'           => array(
                    'title' => 'Activate Taxonomy Manger',
                    'desc' => 'Taxonomy manager can be changed easily here',
                ),
                'media_widget'           => array(
                    'title' => 'Activate Media Widget',
                    'desc' => 'Media widget can be chnaged easily here',
                ),
                'gallery_manager'           => array(
                    'title' => 'Activate Gallery Manger',
                    'desc' => 'Gallery manager can be changed easily here',
                ),
                'testimonial_manager'           => array(
                    'title' => 'Activate Testimonial Manager',
                    'desc' => 'Click button to chnage. Violate is activated. Black is activated.',
                ),
                'templates_manager'           => array(
                    'title' => 'Activate Templates Manager',
                    'desc' => 'Click button to chnage. Violate is activated. Black is activated.',
                ),
                'login_manager'           => array(
                    'title' => 'Activate Login Manager',
                    'desc' => 'Click button to chnage. Violate is activated. Black is activated.',
                ),
                'membership_manager'           => array(
                    'title' => 'Activate Membership Manager',
                    'desc' => 'Click button to chnage. Violate is activated. Black is activated.',
                ),
                'chat_manager'           => array(
                    'title' => 'Activate Chat Manger',
                    'desc' => 'Click button to chnage. Violate is activated. Black is activated.',
                )
            );
        }
        //public static function __destruct() {}
    }

endif;