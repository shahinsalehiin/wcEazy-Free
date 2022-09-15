<?php

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

if (!class_exists('WcEazyClientAjax')) {
    class WcEazyClientAjax
    {
        public $base_client;

        public function __construct($base_client)
        {
            $this->base_client = $base_client;

            /* Product Sticky Bar */
            add_action( 'wp_ajax_wceazy_product_sticky_bar_add_to_cart', array($this, 'wceazy_product_sticky_bar_add_to_cart') );
            add_action( 'wp_ajax_nopriv_wceazy_product_sticky_bar_add_to_cart', array($this, 'wceazy_product_sticky_bar_add_to_cart') );

            /* One Click Checkout */
            add_action( 'wp_ajax_wceazy_one_click_checkout_ajax_add_to_cart', array($this, 'wceazy_one_click_checkout_ajax_add_to_cart') );
            add_action( 'wp_ajax_nopriv_wceazy_one_click_checkout_ajax_add_to_cart', array($this, 'wceazy_one_click_checkout_ajax_add_to_cart') );

            /* Floating Cart */
            add_action( 'wp_ajax_wceazy_floating_cart_get_cart', array($this, 'wceazy_floating_cart_get_cart') );
            add_action( 'wp_ajax_nopriv_wceazy_floating_cart_get_cart', array($this, 'wceazy_floating_cart_get_cart') );

            add_action( 'wp_ajax_wceazy_floating_cart_remove_cart_item', array($this, 'wceazy_floating_cart_remove_cart_item') );
            add_action( 'wp_ajax_nopriv_wceazy_floating_cart_remove_cart_item', array($this, 'wceazy_floating_cart_remove_cart_item') );

            add_action( 'wp_ajax_wceazy_floating_cart_update_quantity', array($this, 'wceazy_floating_cart_update_quantity') );
            add_action( 'wp_ajax_nopriv_wceazy_floating_cart_update_quantity', array($this, 'wceazy_floating_cart_update_quantity') );

            add_action( 'wp_ajax_wceazy_floating_cart_apply_coupon', array($this, 'wceazy_floating_cart_apply_coupon') );
            add_action( 'wp_ajax_nopriv_wceazy_floating_cart_apply_coupon', array($this, 'wceazy_floating_cart_apply_coupon') );

            /* Shipping Bar */
            add_action( 'wp_ajax_wceazy_shipping_bar_cart_updated', array($this, 'wceazy_shipping_bar_cart_updated') );
            add_action( 'wp_ajax_nopriv_wceazy_shipping_bar_cart_updated', array($this, 'wceazy_shipping_bar_cart_updated') );

        }



        /* Product Sticky Bar */
        public function wceazy_product_sticky_bar_add_to_cart() {
            include_once WCEAZY_PATH . "frontend/api/product_sticky_bar/add_to_cart.php";
            wp_die();
        }

        /* One Click Checkout */
        public function wceazy_one_click_checkout_ajax_add_to_cart() {
            include_once WCEAZY_PATH . "frontend/api/one_click_checkout/ajax_add_to_cart.php";
            wp_die();
        }

        /* Floating Cart */
        public function wceazy_floating_cart_get_cart() {
            include_once WCEAZY_PATH . "frontend/api/floating_cart/get_cart.php";
            wp_die();
        }
        public function wceazy_floating_cart_remove_cart_item() {
            include_once WCEAZY_PATH . "frontend/api/floating_cart/remove_cart_item.php";
            wp_die();
        }
        public function wceazy_floating_cart_update_quantity() {
            include_once WCEAZY_PATH . "frontend/api/floating_cart/update_quantity.php";
            wp_die();
        }
        public function wceazy_floating_cart_apply_coupon() {
            include_once WCEAZY_PATH . "frontend/api/floating_cart/apply_coupon.php";
            wp_die();
        }


        /* Shipping Bar */
        public function wceazy_shipping_bar_cart_updated() {
            include_once WCEAZY_PATH . "frontend/api/shipping_bar/get_updated_content.php";
            wp_die();
        }


    }
}
