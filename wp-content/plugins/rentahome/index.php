<?php
/**
 * Rent a Home
 *
 * @package           rentahome
 * @author            vsr11
 *
 * @wordpress-plugin
 * Plugin Name:       rentahome
 * Description:       A WordPress plugin for renting a home.
 * Version:           1.0.0
 * Requires at least: 6.2
 * Requires PHP:      8.0
 * Author:            vsr11
 * Text Domain:       rentahome
 * Domain Path:       /languages
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */


require_once 'functions.php';
require_once 'class-home.php';
require_once 'class-home-taxonomies.php';
new Home_Type();
new Home_Taxonomies( 'home' );
