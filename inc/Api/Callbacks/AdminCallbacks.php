<?php
namespace Inc\Api\Callbacks;

use Inc\Base\BaseController;

if ( ! class_exists( 'AdminCallbacks' ) ) :

    class AdminCallbacks extends BaseController{
        public function adminDashboard() {
            return require_once("$this->plugin_path/templates/admin.php");
        }
        public function alecadddWidgets() {
            return require_once("$this->plugin_path/templates/widgets.php");
        }
    }

endif;