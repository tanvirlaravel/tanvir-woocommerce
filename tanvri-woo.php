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

add_action('woocommerce_before_single_product', 'wc_custom_before_single_product');
function wc_custom_before_single_product(){
    // is_product() is a conditional tag in WooCommerce that checks if the current page is a single product page. 
   if(!is_product()){
    return;
   }

   // Display a custom banner
   echo '
   <div class="wc-custom-banner" style="background-color: #e6f7ff; padding: 20px; border: 2px solid #0073aa; margin-bottom: 20px; text-align: center;">
        <h2>Special Offer!</h2>
        <p>Free shipping on all orders over $50.</p>
     </div>
    ';
}

add_action('wp_enqueue_scripts', 'wc_enqueue_custom_styles');
function wc_enqueue_custom_styles() {
    if (is_product()) {
        wp_add_inline_style('woocommerce-general', '
            .wc-custom-banner {
                font-family: Arial, sans-serif;
                color: #333;
                border-radius: 5px;
            }
        ');
    }
}