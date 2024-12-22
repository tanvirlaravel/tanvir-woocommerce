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

class Tanvir_Woo {
    public function __construct()
    {
        $this->define_constants();
        die();
    }

    private function define_constants(){
        echo 'constain define';
    }
}

// Initialize the plugin
function tanvir_woo_init(){
    new Tanvir_Woo();
}
add_action('plugins_loaded', 'tanvir_woo_init');

// echo '<pre>';
// var_dump($var); 
// var_dump($var3); 
// die();