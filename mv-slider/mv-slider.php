<?php

/**
 * Plugin Name: MV Slider
 * Plugin URI:
 * Description:
 * Version: 1.0
 * Requires at least: 6.4
 * Author: T&K Techno-Peeps
 * License: GPL v2 or later
 * License URI: https://gnu.org/licenses/gpl-2.0.html
 * Text Domain: MV Slider
 * Domain Path: /languages
 */

/*
MV-Slider is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

MV-Slider is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with MV-Slider. If not, see {URI to Plugin License}.
*/

/* Ensures that this php file can not run on its own. */
if (function_exists("add_action")) {
    die("Can not execute this directly");
    exit;
}

if (!class_exists("MV_Slider")) {
    class MV_Slider {

        /* CTOR */
        function __construct() {
            $this->define_constants();
        }

        public function define_constants() {
            define('MV_SLIDER_PATH', plugin_dir_path(__FILE__));
            define('MV_SLIDER_URL', plugin_dir_url(__FILE__));
            define('MV_SLIDER_VERSION', '1.0.0');
        }

        public static function activate() {

        }

        public static function deactivate() {

        }

        public static function uninstall() {

        }
    }
}

if (class_exists("MV_Slider")) {

    register_activation_hook(__FILE__, array( 'MV_Slider', 'activate' ));
    register_deactivation_hook(__FILE__, array('MV_Slider', 'deactivate'));
    register_uninstall_hook(__FILE__, array('MV_Slider', 'uninstall'));
    
    $mv_slider = new MV_Slider();
}