<?php
namespace Inc\Base;

use \Inc\Base\BaseController;

if ( ! class_exists( 'SettingsLinks' ) ) :

    class SettingsLinks extends BaseController{
        //public function __construct() {}
        public function register() {
            add_filter('plugin_action_links_'.$this->plugin,array($this,'settings_links'),110);           
        }
        public function settings_links($links) {
            //$links[] = '<a href="admin.php?page=alecaddd_plugin">Settings</a>';
            $settings_links = '<a href="admin.php?page=alecaddd_plugin">Settings</a>';
            array_push($links,$settings_links);
            return $links;
        }
        //public function __destruct() {}
    }

endif;