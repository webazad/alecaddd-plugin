<?php
namespace Inc\Pages;

use Inc\Api\SettingsApi;
use Inc\Base\BaseController;
use Inc\Api\CallBacks\AdminCallbacks;
use Inc\Api\CallBacks\ManagerCallbacks;

if ( ! class_exists( 'Dashboard' ) ) :

    class Dashboard extends BaseController{
        public $settings;
        public $callbacks;
        public $callbacks_mngr;
        public $pages = array();
        public $subpages = array();
        //public function __construct() {}
        public function register() {   
            $this->settings = new SettingsApi();
            $this->callbacks = new AdminCallbacks();
            $this->callbacks_mngr = new ManagerCallbacks();
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
                    'page_title'    => 'Custom Post',
                    'menu_title'    => 'Custom Post',
                    'capability'    => 'manage_options',
                    'menu_slug'     => 'alecaddd_posts',
                    'callback'      => function(){echo 'sub1';}
                ),
                array(
                    'parent_slug'   => 'alecaddd_plugin',
                    'page_title'    => 'Taxonomies',
                    'menu_title'    => 'Taxonomies',
                    'capability'    => 'manage_options',
                    'menu_slug'     => 'alecaddd_taxonomies',
                    'callback'      => function(){echo 'sub2';}
                ),
                array(
                    'parent_slug'   => 'alecaddd_plugin',
                    'page_title'    => 'Widgets',
                    'menu_title'    => 'Widgets',
                    'capability'    => 'manage_options',
                    'menu_slug'     => 'widgets',
                    'callback'      => array($this->callbacks, 'alecadddWidgets'),
                )
            );
        }
        public function setSettings() {
            $args =  array(
                array(
                    'option_group'  => 'alecaddd_plugin_settings',
                    'option_name'   => 'alecaddd_plugin',
                    'callback'      => array($this->callbacks_mngr,'checkboxSanitize') // To validate the values
                )
            );
            // $args =  array();
            // foreach($this->managers as $manager => $title){                
            //     $args[] =  array(
            //         'option_group'  => 'alecaddd_plugin_settings',
            //         'option_name'   => $manager,
            //         'callback'      => array($this->callbacks_mngr,'checkboxSanitize') // To validate the values
            //     );
            // }
            $this->settings->setSettings($args);
        }
        public function setSections() {
            $args =  array(
                array(
                    'id'        => 'alecaddd_admin_index',
                    'title'     => 'Settings Manager',
                    //'callback'  => '__return_false',
                    'callback'  => array($this->callbacks_mngr,'adminSectionManager'),
                    'page'      => 'alecaddd_plugin'
                )
            );
            $this->settings->setSections($args);
        }
        public function setFields() {
            $args =  array();
            foreach($this->managers as $key => $heading){                
                $args[] =  array(
                    'id'        => $key,
                    'title'     => $heading['title'],
                    'callback'  => array($this->callbacks_mngr,'checkboxField'),
                    'page'      => 'alecaddd_plugin',
                    'section'   => 'alecaddd_admin_index',
                    'args'   => array(
                        'option_name'   => 'alecaddd_plugin',
                        'label_for'     => $key,
                        'class'         => 'ui-toggle',
                        'desc'         => $heading['desc']
                    )
                );
            }
            $this->settings->setFields($args);
        }
        //public function __destruct() {}
    }

endif;