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
            echo '<input type="checkbox" class="" value="1" checked />';
        }
        public function alecadddTextExample() {
            echo '<div class=""><input type="checkbox" id="ui" class="ui-toggle" value="1" checked /><label for="ui"><div></div></label></div>';
        }
    }

endif;