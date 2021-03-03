<?php
/**
 * Plugin Name: FiveAdmin
 * Plugin URI: https://ronan-smith.github.io/fiveadmin/
 * Description: An unobtrusive WordPress plugin for white-labeling and improving the admin dashboard and login.
 * Version: 0.1.0
 * Requires at least: 2.7
 * Author: Ronan Smith
 * Author URI: https://github.com/ronan-smith/fiveadmin
*/

// If this file is accessed directly (via URL, and not by WordPress), kill the script.
if (!defined('WPINC')) die;

// Load the main plugin file from the mu-plugins directory.
require WPMU_PLUGIN_DIR . '/fiveadmin-wp/fiveadmin-wp.php';
