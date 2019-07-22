<?php
namespace Inc;

// EXIT IF ACCESSED DIRECTLY
defined('ABSPATH') || exit;
if ( ! class_exists( 'Init' ) ):

     final class Init{
         public $plugin_basename;
         public function __construct() {}
         public static function get_services() {
             return [
                Pages\Admin::class,
                Base\Enqueue::class,
                Base\SettingsLinks::class,
                Api\SettingsApi::class
            ];   
        }
        public static function register_services() {
            foreach(self::get_services() as $class){
                $service = self::instantiate($class);
                if(method_exists($service,'register')){
                    $service->register();
                }
            }
        }
        private static function instantiate($class) {
            $service = new $class();
            return $service;
        }
//         public static function _get_instance() {
//             if(is_null(self::$_instance) && ! isset(self::$_instance) && ! (self::$_instance instanceof self)){
//                 self::$_instance = new self();            
//             }
//             //return self::$_instance;
//         }
//         //public function __destruct() {}
    }
endif;