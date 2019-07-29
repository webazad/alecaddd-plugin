<?php
namespace Inc\Api\Callbacks;

use Inc\Base\BaseController;

if ( ! class_exists( 'AdminCallbacks' ) ) :

    class AdminCallbacks extends BaseController{
        public function adminDashboard() {
            return require_once("$this->plugin_path/templates/admin.php");
        }
        public function alecadddOptionsGroup($input) {
            //return require_once("$this->plugin_path/templates/admin.php");
            return $input;
        }
        public function alecadddAdminSection() {
            echo 'asdf';
        }
        public function alecadddTextExample() {
            echo 'asdf';
        }
    }

endif;