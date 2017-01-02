<?php
/**
 * Plugin Name: Indian Rupee Symbol KodCart
 * Plugin URI: https://www.kodcart.com/
 * Description: Some of the Wordpress Woocommerce showing rupee symbol as box in chrome.For this issue we developed a simple plugin to avoid modification in your source cods.Simply upload and activate the plugin.
 * Version: 0.1
 * Author: KodCart
 * Author URI: https://www.kodcart.com/
 * Text Domain: Indian Rupee Symbol - Kodcart
 * Domain Path: /languages/
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Tags: rupee symbol not showing in woocommerce,indian rupee symbol not displaying in chrome,rupee html code,web rupee symbol,wordpress indian currency symbol plugin,WooCommerce: Indian Rupee Symbol Appears As Box,Currency symbol is not showing,woocommerce
 */
 
if ( !defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly




global $woocommerce;
if ( isset( $woocommerce ) || ! function_exists( 'WC' ) ) {

    /**
     *  Load fontawesome on frontend
     */
    function wics_add_scripts(){
       wp_enqueue_style('font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
    }
    add_action('wp_head', 'wics_add_scripts');


    function wics_add_admin_scripts(){
        wp_enqueue_style('font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
    }
    add_action('admin_enqueue_scripts', 'wics_add_admin_scripts');
    /**
     * @param $currency_array
     * @return mixed
     */
    function addINR($currency_array){
        $currency_array['INR'] = '<i class="fa fa-rupee"></i> ';
        return $currency_array;
    }
    add_filter('woocommerce_currency_symbols','addINR');
}

