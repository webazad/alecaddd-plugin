<?php
namespace Inc\Base;

use \Inc\Base\BaseController;

if ( ! class_exists( 'SettingsLinks' ) ) :

    class SettingsLinks extends BaseController{
        public function __construct() {}
        public function register() {
            add_filter('plugin_action_links-asdf',array($this,'settings_links'));           
        }
        public function settings_links($links) {
            $settings_links = '<a href="admin.php/page=alecaddd-plugin">Settings</a>';
            array_push($links,$settings_links);
            return $links;
        }
        public function __destruct() {}
    }

endif;