<?php
namespace Inc\Pages;
// EXIT IF ACCESSED DIRECTLY
defined('ABSPATH') || exit;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;

if ( ! class_exists( 'Admin' ) ) :

    class Admin extends BaseController{
        public $settings;
        public $pages = array();
        public $subpages = array();
        public function __construct() {
            $this->settings = new SettingsApi();
            $this->pages = array(
                array(
                    'page_title'    => 'Alecaddd Plugin',
                    'menu_title'    => 'Alecaddd Plugin',
                    'capability'    => 'manage_options',
                    'menu_slug'     => 'alecaddd_plugin',
                    'callback'      => function(){echo 'main';},
                    'icon_url'      => '',
                    'position'      => 110
                )
            );
            $this->subpages =  array(
                array(
                    'parent_slug'   => 'alecaddd_plugin',
                    'page_title'    => 'One',
                    'menu_title'    => 'One',
                    'capability'    => 'manage_options',
                    'menu_slug'     => 'alecaddd_plugins',
                    'callback'      => function(){echo 'sub';}
                ),
                array(
                    'parent_slug'   => 'alecaddd_plugin',
                    'page_title'    => 'Two',
                    'menu_title'    => 'Two',
                    'capability'    => 'manage_options',
                    'menu_slug'     => 'alecaddd_plugins',
                    'callback'      => function(){echo 'sub';}
                )
            );
        }
        public function register() {            
            $this->settings->addPages($this->pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
        }
    }

endif;