<?php
namespace Inc\Pages;
// EXIT IF ACCESSED DIRECTLY
defined('ABSPATH') || exit;

use \Inc\Base\BaseController;

if ( ! class_exists( 'Admin' ) ) :

    class Admin extends BaseController{
        public $countries = null;
        public function __construct() {
        }
        public static function register() {
            add_action('admin_menu',array($this,'add_admin_pages'));
        }
        public static function add_admin_pages() {
            add_menu_page('Alecaddd Plugin','Alecaddd Plugin','manage_options','alecaddplugin',array($this,'admin_index'),plugins_url('/assets/style.css',__FILE__),null);
        }
        public function admin_index() {
            require_once($this->plugin_path . '/templates/admin-index.php');
        }
        public static function activate() {
        }
    }
endif;