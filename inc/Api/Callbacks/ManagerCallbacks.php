<?php
namespace Inc\Api\Callbacks;

use Inc\Base\BaseController;

if ( ! class_exists( 'ManagerCallbacks' ) ) :

    class ManagerCallbacks extends BaseController{
        public function adminDashboard() {
            return require_once("$this->plugin_path/templates/admin.php");
        }
        public function checkboxSanitize($input) {
            // Validate the datas;
            // return filter_var($input,FILTER_SANITIZE_NUMBER_INT);
            //return $input; //(isset($input) ? true : false);
            $output = array();
            foreach($this->managers as $key => $value){
                $output[$key] = isset($input[$key]) ? true : false;
            }
            return $output;
        }
        public function adminSectionManager() {
            echo "Manage the sections and features of this plugin";
        }
        public function checkboxField($args) {
            $name = $args['label_for'];
            $class = $args['class'];
            $option_name = $args['option_name'];
            $checkbox = get_option($option_name);
            echo '<div class="'.$class.'"><input type="checkbox" name="' . $option_name . '[' . $name .']' . '" id="'.$name.'" class="'.$class.'" value="1" '.($checkbox[$name] ? 'checked' : '').' /><label for="'.$name.'"><div></div></label></div>';
        }
    }

endif;