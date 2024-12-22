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

add_action('woocommerce_archive_description', 'func_to_run');

function func_to_run() {
    echo '<pre>';
    var_dump(is_product_category());
    // In WordPress, the get_queried_object() function is used to retrieve the object for the current query being processed. It is especially useful when you need to access the properties of the current object being queried, such as a category, tag, post, or custom taxonomy term.
    var_dump(get_queried_object());
}