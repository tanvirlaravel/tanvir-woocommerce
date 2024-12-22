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

add_action('woocommerce_before_add_to_cart_quantity', 'func_to_run');

function func_to_run() {
    global $product;
    // In WooCommerce, the global $product object is a crucial variable that holds information about the currently displayed product on a single product page. It's an instance of the WC_Product class (or one of its child classes like WC_Product_Simple, WC_Product_Variable, etc.).

   // How it works:
   // When WooCommerce displays a single product page, it queries the database for the product's data and populates the $product    global variable with this information. This makes it readily accessible throughout the product page templates and other related code.


//    object(WC_Product_Simple)#2760 (13) { // Object of class WC_Product_Simple, object ID #2760, has 13 properties
//    ["id":protected]=> // Protected property 'id' (product ID). The value is missing in the provided output, but it would be an integer.
//    ["data":protected]=> // Protected property 'data' containing the product's core data
//        array( // An associative array holding product data
//            ["date_modified"]=> // Date and time the product was last modified
//            ["status"]=> // Product status (e.g., 'publish', 'draft')
//            ["featured"]=> // Whether the product is featured (boolean: 1 or 0)
//            ["catalog_visibility"]=> // Product catalog visibility ('visible', 'catalog', 'search', 'hidden')
//            ["description"]=> // Full product description (HTML)
//            ["short_description"]=> // Short product description (HTML)
//            ["sku"]=> // Stock Keeping Unit (product identifier)
//            ["global_unique_id"]=> // Global unique ID for the product
//            ["price"]=> // Current product price
//            ["regular_price"]=> // Regular price (before sale)
//            ["sale_price"]=> // Sale price (if applicable)
//            ["date_on_sale_from"]=> // Start date of sale (timestamp or null)
//            ["date_on_sale_to"]=> // End date of sale (timestamp or null)
//            ["total_sales"]=> // Number of times the product has been sold
//            ["tax_status"]=> // Tax status ('taxable', 'shipping', 'none')
//            ["tax_class"]=> // Tax class (e.g., 'reduced-rate')
//            ["manage_stock"]=> // Whether stock management is enabled (boolean)
//            ["stock_quantity"]=> // Number of units in stock
//            ["stock_status"]=> // Stock status ('instock', 'outofstock', 'onbackorder')
//            ["backorders"]=> // Backorder status ('no', 'notify', 'yes')
//            ["low_stock_amount"]=> // Threshold for low stock notification
//            ["sold_individually"]=> // Whether the product can only be bought one at a time (boolean)
//            ["weight"]=> // Product weight
//            ["length"]=> // Product length
//            ["width"]=> // Product width
//            ["height"]=> // Product height
//            ["upsell_ids"]=> // Array of IDs of upsell products
//            ["cross_sell_ids"]=> // Array of IDs of cross-sell products
//            ["parent_id"]=> // ID of the parent product (for variations)
//            ["reviews_allowed"]=> // Whether reviews are allowed (boolean)
//            ["purchase_note"]=> // Purchase note displayed after checkout
//            ["attributes"]=> // Product attributes (array of attribute objects)
//                array(
//                    ["pa_color"]=> // Example attribute: 'color' (prefixed with 'pa_' for taxonomy attributes)
//                    // ... attribute data ...
//                )
//            ["default_attributes"]=> // Default attributes for variable products
//            ["menu_order"]=> // Menu order for the product
//            ["post_password"]=> // Password required to view the product (if any)
//            ["virtual"]=> // Whether the product is virtual (boolean)
//            ["downloadable"]=> // Whether the product is downloadable (boolean)
//            ["category_ids"]=> // Array of category IDs the product belongs to
//            ["tag_ids"]=> // Array of tag IDs the product is tagged with
//            ["shipping_class_id"]=> // ID of the shipping class
//            ["downloads"]=> // Array of downloadable files (for downloadable products)
//            ["image_id"]=> // ID of the featured image
//            ["gallery_image_ids"]=> // Array of gallery image IDs
//            ["download_limit"]=> // Download limit (for downloadable products)
//            ["download_expiry"]=> // Download expiry (for downloadable products)
//            ["rating_counts"]=> // Array of rating counts for each rating value
//            ["average_rating"]=> // Average product rating
//            ["review_count"]=> // Number of reviews
//            ["cogs_value"]=> // Cost of Goods Sold value
//        )
//    ["changes":protected]=> // Protected property tracking changes made to the product data
//    ["object_read":protected]=> // Protected property indicating whether the product data has been read from the database
//    ["object_type":protected]=> // Protected property specifying the object type ('product')
//    ["extra_data":protected]=> // Protected property for extra data
//    ["default_data":protected]=> // Protected property containing default product data
//    ["data_store":protected]=> // Protected property holding the data store object
//        object(WC_Data_Store)#... { // Object responsible for interacting with the database
//            ["stores":"WC_Data_Store":private]=> // Private property containing available data stores
//            ["current_class_name":"WC_Data_Store":private]=> // Private property storing the current data store class name
//            ["object_type":"WC_Data_Store":private]=> // Private property storing the object type
//        }
//    ["cache_group":protected]=> // Protected property for caching group
//    ["meta_data":protected]=> // Protected property for meta data (custom fields)
//    ["legacy_datastore_props":protected]=> // Protected property for legacy data store properties
//    ["post_type":protected]=> // Protected property for the post type ('product')
//    ["supports":protected]=> // Protected property for supported features

   
if ($product->is_in_stock()) {
    echo '<p class="stock-message" style="color: green; margin-bottom: 10px;">
        Good news! This product is in stock.
    </p>';
    } else {
    echo '<p class="stock-message" style="color: red; margin-bottom: 10px;">
        Sorry, this product is currently out of stock.
    </p>';
    }
}

