<?php
namespace Inc\Api;

if ( ! class_exists( 'SettingsApi' ) ) :

    class SettingsApi{
        public $admin_pages = array();
        public function __construct() {}
        public function register() {
            add_action('admin_menu',array($this,'add_admin_menu'));            
        }
        public function addPages($pages) {
            $this->admin_pages = $pages;
            return $this;
        }
        public function add_admin_menu() {
            foreach($this->admin_pages as $page){
                add_menu_page($page['page_title'],$page['menu_title'],$page['capability'],$page['page_slug'],$page['callback'],$page['icon_url'],$page['position']);
            };                
        }
        public function __destruct() {}
    }
endif;