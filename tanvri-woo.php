<?php 

/**
 * Plugin Name: Tanvir Woo
 * Plugin URI: https://yourwebsite.com/plugins/woo-checkout-enhancer
 * Description: Enhances the WooCommerce checkout experience with delivery estimates, special offers, and dynamic notices
 * Version: 1.0.0
 * Author: Tanvir
 * Author URI: https://tanvir.com
 * Text Domain: tanvir-woo
 * Domain Path: /languages *
 * @package TanvirWoo
 */

 if (!defined('ABSPATH')) {
    exit;
}

// Check if WooCommerce is active
if (!in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    return;
}

add_action('woocommerce_shop_loop_item_title', 'func_to_run');

function func_to_run() {
    global $product;
   echo $product->get_sku();
}