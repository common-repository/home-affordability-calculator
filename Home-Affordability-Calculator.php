<?php
/**
 * Hayat Developers
 *
 * @package     Home Affordability Calculator
 * @author      Hayat Developers
 * @copyright   2022 Home Affordability Calculator
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Home Affordability Calculator Lite
 
 * Description: Use this affordability calculator to estimate a comfortable mortgage amount based on your current budget. Enter details about your income, down payment and monthly debts to determine how much to spend on a house.

 * Version:     1.3
 * Author:      Hayat Developers | Home Affordability Calculator - Made for WordPress
 * Author URI:  https://wppluginbox.com
 * Text Domain: Home Affordability Calculator 
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

include __DIR__.'/functions-admin.php';
include __DIR__.'/functions-wp.php';

$short_code = 'affordability-calc-wppluginbox';



add_action( 'admin_enqueue_scripts', 'WPBOXAFF_CSSJS' ,111);

add_action('admin_menu', 'WPBOXAFF_menu');
add_action('wp_enqueue_scripts', 'WPBOXAFF_scripts',111);


$web_url =  sanitize_url($_SERVER['REQUEST_URI']);
$filter_w = 'wp-admin';
if(strpos($web_url, $filter_w) !== false){return 0;} else {
add_shortcode($short_code, 'WPBOXAFF_initiate');
}

?>