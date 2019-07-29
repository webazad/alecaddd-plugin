<?php
namespace Inc\Pages;

use Inc\Api\SettingsApi;
use Inc\Base\BaseController;
use Inc\Api\CallBacks\AdminCallbacks;

if ( ! class_exists( 'Admin' ) ) :

    class Admin extends BaseController{
        public $settings;
        public $pages = array();
        public $subpages = array();
        public $callbacks;
        //public function __construct() {}
        public function register() {   
            $this->settings = new SettingsApi();
            $this->callbacks = new AdminCallbacks();
            $this->setPages();
            $this->setSubPages();
            
            $this->setSettings();
            $this->setSections();
            $this->setFields();
            
            $this->settings->addPages($this->pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
        }
        public function setPages(){
            $this->pages = array(
                array(
                    'page_title'    => 'Alecaddd Plugin',
                    'menu_title'    => 'Alecaddd Plugin',
                    'capability'    => 'manage_options',
                    'menu_slug'     => 'alecaddd_plugin',
                    'callback'      => array($this->callbacks, 'adminDashboard'),
                    'icon_url'      => '',
                    'position'      => 110
                )
            );
        }
        public function setSubPages(){
            $this->subpages =  array(
                array(
                    'parent_slug'   => 'alecaddd_plugin',
                    'page_title'    => 'One',
                    'menu_title'    => 'One',
                    'capability'    => 'manage_options',
                    'menu_slug'     => 'alecaddd_plugins',
                    'callback'      => function(){echo 'sub1';}
                ),
                array(
                    'parent_slug'   => 'alecaddd_plugin',
                    'page_title'    => 'Two',
                    'menu_title'    => 'Two',
                    'capability'    => 'manage_options',
                    'menu_slug'     => 'alecaddd_plugins',
                    'callback'      => function(){echo 'sub2';}
                )
            );
        }
        public function setSettings() {
            $args =  array(
                array(
                    'options_group'   => 'alecaddd_options_group',
                    'option_name'    => 'text_example',
                    'callback'    => array($this->callbacks,'alecadddOptionsGroup')
                )
            );
            $this->settings->setSettings($args);
        }
        public function setSections() {
            $args =  array(
                array(
                    'id'        => 'alecaddd_admin_index',
                    'title'     => 'Settings',
                    'callback'  => '__return_false',//array($this->callbacks,'alecadddAdminSection'),
                    'page'      => 'alecaddd_plugin'
                )
            );
            $this->settings->setSections($args);
        }
        public function setFields() {
            $args =  array(
                array(
                    'id'        => 'text_example',
                    'title'     => 'Text Example',
                    'callback'  => array($this->callbacks,'alecadddTextExample'),
                    'page'      => 'alecaddd_plugin',
                    'section'   => 'alecaddd_admin_index',
                    'args'   => array(
                        'label_for' => 'text_example',
                        'class' => 'class'
                    )
                )
            );
            $this->settings->setFields($args);
        }
        //public function __destruct() {}
    }

endif;