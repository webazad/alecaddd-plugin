<?php
namespace Inc\Pages;
// EXIT IF ACCESSED DIRECTLY
defined('ABSPATH') || exit;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;

if ( ! class_exists( 'Admin' ) ) :

    class Admin extends BaseController{
        public $settings;
        public function __construct() {
            $this->settings = new SettingsApi();
        }
        public function register() {
            $pages = array(
                array(
                    'page_title'    => 'Alecaddd Plugin',
                    'menu_title'    => 'Alecaddd Plugin',
                    'capability'    => 'manage_options',
                    'page_slug'     => 'alecaddd_plugin',
                    'callback'      => function(){echo 'sdf';},
                    'icon_url'      => '',
                    'position'      => 110
                )
            );
            $this->settings->addPages($pages)->register(); //add_action('admin_menu',array($this,'add_admin_pages'));
        }
    }
endif;