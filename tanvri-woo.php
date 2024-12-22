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
    if (is_product_category()) {
        $category = get_queried_object(); // Get the current category object
        $category_name = $category->name;

        // Add custom message for specific categories
        if ($category_name == 'Music') {
            echo '<p style="color: green; font-weight: bold;">Exclusive deals on Music! Don\'t miss out on our amazing offers.</p>';
        } elseif ($category_name == 'Clothing') {
            echo '<p style="color: blue;">Free shipping on all clothing orders over $100. Shop now!</p>';
        }
    }
}