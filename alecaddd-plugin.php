<?php
/* 
@package alecaddPlugin
Plugin Name: Alecaddd-plugin
Description: Description will go here...
Plugin URI: gittechs.com/plugin/alecaddd-plugin
Author: Md. Abul Kalam Azad
Author URI: gittechs.com/author
Author Email: webdevazad@gmail.com
Version: 0.0.0.1
Text Domain: alecaddd-plugin
License: GPLv2 or later
*/ 

// EXIT IF ACCESSED DIRECTLY
defined('ABSPATH') || exit;

// use Inc\Base\Activate;
// use Inc\Base\Deactivate;
// use Inc\Base\Uninstall;

//define('PLUGIN_PATH',plugin_dir_path(__FILE__));
//define('PLUGIN_URL',plugin_dir_url(__FILE__));
//define('PLUGIN_BASENAME',plugin_basename(__FILE__));

// function activate_alecaddd(){
//     Activate::activate();
// }
// register_activation_hook(__FILE__,'activate_alecaddd');

// function deactivate_alecaddd(){
//     Deactivate::deactivate();
// }
// register_deactivation_hook(__FILE__,'deactivate_alecaddd');

// function uninstall_alecaddd(){
//     Uninstall::uninstall();
// }
// register_uninstall_hook(__FILE__,'uninstall_alecaddd');

if(file_exists(dirname(__FILE__) . '/vendor/autoload.php')){
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

if ( class_exists( 'Inc\\Init' ) ) :    
    Inc\Init::register_services();
endif;


