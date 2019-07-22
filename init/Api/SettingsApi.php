<?php
namespace Inc\Api;

use \Inc\Base\BaseController;

if ( ! class_exists( 'SettingsApi' ) ) :

    class Enqueue extends SettingsApi{
        public $admin_pages = array();
        public function __construct() {}
        public static function register() {
            add_action('admin_menu',array($this,'add_admin_menu'));            
        }
        public function addPages() {
            $this->admin_pages = $pages;
            return $this;
        }
        private function add_admin_menu() {
            foreach($this->admin_pages as $page){
                add_menu_page($page['page_title'],$page['menu_title'],$page['page_title'],$page['page_title'],$page['page_title']);
            };                
        }
        public function __destruct() {}
    }
endif;