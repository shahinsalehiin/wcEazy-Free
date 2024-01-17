<?php


$wceazy_one_click_checkout_settings = get_option('wceazy_one_click_checkout_settings', False);
$wceazy_occ_settings = $wceazy_one_click_checkout_settings ? json_decode($wceazy_one_click_checkout_settings, true) : array();

$wceazy_occ_disable_cart = isset($wceazy_occ_settings["disable_cart"]) ? $wceazy_occ_settings["disable_cart"] : "yes";
$wceazy_occ_enable_single_page = isset($wceazy_occ_settings["enable_single_page"]) ? $wceazy_occ_settings["enable_single_page"] : "no";
$wceazy_occ_enable_redirect_to_cart = isset($wceazy_occ_settings["enable_redirect_to_cart"]) ? $wceazy_occ_settings["enable_redirect_to_cart"] : "yes";
$wceazy_occ_enable_custom_url = isset($wceazy_occ_settings["enable_custom_url"]) ? $wceazy_occ_settings["enable_custom_url"] : "no";
$wceazy_occ_redirect_to_page = isset($wceazy_occ_settings["redirect_to_page"]) ? $wceazy_occ_settings["redirect_to_page"] : wc_get_page_permalink('checkout');
$wceazy_occ_redirect_to_custom_url = isset($wceazy_occ_settings["redirect_to_custom_url"]) ? $wceazy_occ_settings["redirect_to_custom_url"] : wc_get_page_permalink('checkout');
$wceazy_occ_disable_continue_shopping_button = isset($wceazy_occ_settings["disable_continue_shopping_button"]) ? $wceazy_occ_settings["disable_continue_shopping_button"] : "no";

$wceazy_occ_enable_product_ajax_to_cart = isset($wceazy_occ_settings["enable_product_ajax_to_cart"]) ? $wceazy_occ_settings["enable_product_ajax_to_cart"] : "no";
$wceazy_occ_change_add_to_cart_button_text = isset($wceazy_occ_settings["change_add_to_cart_button_text"]) ? $wceazy_occ_settings["change_add_to_cart_button_text"] : "no";
$wceazy_occ_cart_button_text = isset($wceazy_occ_settings["cart_button_text"]) ? $wceazy_occ_settings["cart_button_text"] : "Add to cart";
$wceazy_occ_select_options_button_text = isset($wceazy_occ_settings["select_options_button_text"]) ? $wceazy_occ_settings["select_options_button_text"] : "Select Options";
$wceazy_occ_read_more_button_text = isset($wceazy_occ_settings["read_more_button_text"]) ? $wceazy_occ_settings["read_more_button_text"] : "Read More";

$wceazy_occ_enable_buy_now_button_on_product = isset($wceazy_occ_settings["enable_buy_now_button_on_product"]) ? $wceazy_occ_settings["enable_buy_now_button_on_product"] : "no";
$wceazy_occ_buy_btn_label_on_product = isset($wceazy_occ_settings["buy_btn_label_on_product"]) ? $wceazy_occ_settings["buy_btn_label_on_product"] : "Buy Now";
$wceazy_occ_buy_btn_redirect_on_product = isset($wceazy_occ_settings["buy_btn_redirect_on_product"]) ? $wceazy_occ_settings["buy_btn_redirect_on_product"] : wc_get_checkout_url();
$wceazy_occ_buy_btn_position_on_product = isset($wceazy_occ_settings["buy_btn_position_on_product"]) ? $wceazy_occ_settings["buy_btn_position_on_product"] : "";
$wceazy_occ_buy_btn_size_on_product = isset($wceazy_occ_settings["buy_btn_size_on_product"]) ? $wceazy_occ_settings["buy_btn_size_on_product"] : "";
$wceazy_occ_buy_now_btn_product_mt = isset($wceazy_occ_settings["buy_now_btn_product_mt"]) ? $wceazy_occ_settings["buy_now_btn_product_mt"] : "";
$wceazy_occ_buy_now_btn_product_mb = isset($wceazy_occ_settings["buy_now_btn_product_mb"]) ? $wceazy_occ_settings["buy_now_btn_product_mb"] : "";
$wceazy_occ_buy_now_btn_product_ml = isset($wceazy_occ_settings["buy_now_btn_product_ml"]) ? $wceazy_occ_settings["buy_now_btn_product_ml"] : "";
$wceazy_occ_buy_now_btn_product_mr = isset($wceazy_occ_settings["buy_now_btn_product_mr"]) ? $wceazy_occ_settings["buy_now_btn_product_mr"] : "";

$wceazy_occ_enable_buy_now_button_on_product_archive = isset($wceazy_occ_settings["enable_buy_now_button_on_product_archive"]) ? $wceazy_occ_settings["enable_buy_now_button_on_product_archive"] : "no";
$wceazy_occ_buy_btn_label_on_product_archive = isset($wceazy_occ_settings["buy_btn_label_on_product_archive"]) ? $wceazy_occ_settings["buy_btn_label_on_product_archive"] : "Buy Now";
$wceazy_occ_buy_btn_redirect_on_product_archive = isset($wceazy_occ_settings["buy_btn_redirect_on_product_archive"]) ? $wceazy_occ_settings["buy_btn_redirect_on_product_archive"] : wc_get_checkout_url();
$wceazy_occ_buy_btn_position_on_product_archive = isset($wceazy_occ_settings["buy_btn_position_on_product_archive"]) ? $wceazy_occ_settings["buy_btn_position_on_product_archive"] : "";
$wceazy_occ_buy_btn_size_on_product_archive = isset($wceazy_occ_settings["buy_btn_size_on_product_archive"]) ? $wceazy_occ_settings["buy_btn_size_on_product_archive"] : "";
$wceazy_occ_buy_now_btn_product_archive_mt = isset($wceazy_occ_settings["buy_now_btn_product_archive_mt"]) ? $wceazy_occ_settings["buy_now_btn_product_archive_mt"] : "";
$wceazy_occ_buy_now_btn_product_archive_mb = isset($wceazy_occ_settings["buy_now_btn_product_archive_mb"]) ? $wceazy_occ_settings["buy_now_btn_product_archive_mb"] : "";
$wceazy_occ_buy_now_btn_product_archive_ml = isset($wceazy_occ_settings["buy_now_btn_product_archive_ml"]) ? $wceazy_occ_settings["buy_now_btn_product_archive_ml"] : "";
$wceazy_occ_buy_now_btn_product_archive_mr = isset($wceazy_occ_settings["buy_now_btn_product_archive_mr"]) ? $wceazy_occ_settings["buy_now_btn_product_archive_mr"] : "";

$wceazy_occ_buy_now_btn_color = isset($wceazy_occ_settings["buy_now_btn_color"]) ? $wceazy_occ_settings["buy_now_btn_color"] : "#ffffff";
$wceazy_occ_buy_now_btn_bg_color = isset($wceazy_occ_settings["buy_now_btn_bg_color"]) ? $wceazy_occ_settings["buy_now_btn_bg_color"] : "#0170B9";
$wceazy_occ_buy_now_btn_hover_color = isset($wceazy_occ_settings["buy_now_btn_hover_color"]) ? $wceazy_occ_settings["buy_now_btn_hover_color"] : "#ffffff";
$wceazy_occ_buy_now_btn_hover_bg_color = isset($wceazy_occ_settings["buy_now_btn_hover_bg_color"]) ? $wceazy_occ_settings["buy_now_btn_hover_bg_color"] : "#000000";
$wceazy_occ_buy_now_btn_ptpb = isset($wceazy_occ_settings["buy_now_btn_ptpb"]) ? $wceazy_occ_settings["buy_now_btn_ptpb"] : "";
$wceazy_occ_buy_now_btn_plpr = isset($wceazy_occ_settings["buy_now_btn_plpr"]) ? $wceazy_occ_settings["buy_now_btn_plpr"] : "";
$wceazy_occ_buy_now_btn_border_radius = isset($wceazy_occ_settings["buy_now_btn_border_radius"]) ? $wceazy_occ_settings["buy_now_btn_border_radius"] : "";

$wceazy_occ_remove_order_comment = isset($wceazy_occ_settings["remove_order_comment"]) ? $wceazy_occ_settings["remove_order_comment"] : "no";
$wceazy_occ_remove_coupon_form = isset($wceazy_occ_settings["remove_coupon_form"]) ? $wceazy_occ_settings["remove_coupon_form"] : "no";
$wceazy_occ_remove_policy_text = isset($wceazy_occ_settings["remove_policy_text"]) ? $wceazy_occ_settings["remove_policy_text"] : "no";
$wceazy_occ_remove_terms_condition = isset($wceazy_occ_settings["remove_terms_condition"]) ? $wceazy_occ_settings["remove_terms_condition"] : "no";
$wceazy_occ_remove_billing_fields = isset($wceazy_occ_settings["remove_billing_fields"]) ? explode(",", $wceazy_occ_settings["remove_billing_fields"]) : array();
$wceazy_occ_remove_shipping_fields = isset($wceazy_occ_settings["remove_shipping_fields"]) ? explode(",", $wceazy_occ_settings["remove_shipping_fields"]) : array();


?>



<div id="wceazy_one_click_checkout">


    <div class="coupon_tab_body" data-id="tab_basket_style">
        <div class="tab_body_title">
            <h1><?php esc_html_e('Basket Style', 'wceazy'); ?></h1>
        </div>
        <div class="tab_body_form">

            <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_enable">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Enable Basket', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <select class="wceazy_floating_cart_select_field">
                        <option value=""><?php esc_html_e('Please select', 'wceazy'); ?></option>
                        <option value="show_always" <?php echo esc_attr("show_always" == $wceazy_fc_basket_enable ? "selected" : ""); ?>><?php esc_html_e('Always Show', 'wceazy'); ?></option>
                        <option value="hide_always" <?php echo esc_attr("hide_always" == $wceazy_fc_basket_enable ? "selected" : ""); ?>><?php esc_html_e('Always Hide', 'wceazy'); ?></option>
                        <option value="hide_empty_cart" <?php echo esc_attr("hide_empty_cart" == $wceazy_fc_basket_enable ? "selected" : ""); ?>><?php esc_html_e('Hide when cart is empty', 'wceazy'); ?></option>
                    </select>
                </div>
            </div>

            <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_shape">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Basket Shape', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <select class="wceazy_floating_cart_select_field">
                        <option value=""><?php esc_html_e('Please select', 'wceazy'); ?></option>
                        <option value="round" <?php echo esc_attr("round" == $wceazy_fc_basket_shape ? "selected" : ""); ?>><?php esc_html_e('Round', 'wceazy'); ?></option>
                        <option value="square" <?php echo esc_attr("square" == $wceazy_fc_basket_shape ? "selected" : ""); ?>><?php esc_html_e('Square', 'wceazy'); ?></option>
                    </select>
                </div>
            </div>

            <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_icon_size">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Basket Icon Size', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <input class="wceazy_floating_cart_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_fc_basket_icon_size); ?>">
                    <small><?php esc_html_e('Set your basket icon size in px (Ex. 35)', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_show_count">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Show Item Count?', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_fc_basket_show_count == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                    <small><?php esc_html_e('Please turn off if you do not want to show basket item count.', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_icon">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Basket Icon', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <div class="icon_selection_area">
                        <div class="icon_field_item icon_1 <?php echo esc_attr("icon_1" == $wceazy_fc_basket_icon ? "active" : ""); ?>" data-value="icon_1"></div>
                        <div class="icon_field_item icon_2 <?php echo esc_attr("icon_2" == $wceazy_fc_basket_icon ? "active" : ""); ?>" data-value="icon_2"></div>
                        <div class="icon_field_item icon_3 <?php echo esc_attr("icon_3" == $wceazy_fc_basket_icon ? "active" : ""); ?>" data-value="icon_3"></div>
                        <div class="icon_field_item icon_4 <?php echo esc_attr("icon_4" == $wceazy_fc_basket_icon ? "active" : ""); ?>" data-value="icon_4"></div>
                        <div class="icon_field_item icon_5 <?php echo esc_attr("icon_5" == $wceazy_fc_basket_icon ? "active" : ""); ?>" data-value="icon_5"></div>
                        <div class="icon_field_item icon_6 <?php echo esc_attr("icon_6" == $wceazy_fc_basket_icon ? "active" : ""); ?>" data-value="icon_6"></div>
                    </div>
                    <small><?php esc_html_e('Please select your basket icon.', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_position">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Basket Position', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <select class="wceazy_floating_cart_select_field">
                        <option value=""><?php esc_html_e('Please select', 'wceazy'); ?></option>
                        <option value="top_left" <?php echo esc_attr("top_left" == $wceazy_fc_basket_position ? "selected" : ""); ?>><?php esc_html_e('Top Left', 'wceazy'); ?></option>
                        <option value="top_right" <?php echo esc_attr("top_right" == $wceazy_fc_basket_position ? "selected" : ""); ?>><?php esc_html_e('Top Right', 'wceazy'); ?></option>
                        <option value="bottom_left" <?php echo esc_attr("bottom_left" == $wceazy_fc_basket_position ? "selected" : ""); ?>><?php esc_html_e('Bottom Left', 'wceazy'); ?></option>
                        <option value="bottom_right" <?php echo esc_attr("bottom_right" == $wceazy_fc_basket_position ? "selected" : ""); ?>><?php esc_html_e('Bottom Right', 'wceazy'); ?></option>
                    </select>
                </div>
            </div>

            <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_offset_vertical">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Basket Offset (Vertical)', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <input class="wceazy_floating_cart_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_fc_basket_offset_vertical); ?>">
                    <small><?php esc_html_e('Set your basket vertical offset in px (Ex. 110)', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_offset_horizontal">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Basket Offset (Horizontal)', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <input class="wceazy_floating_cart_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_fc_basket_offset_horizontal); ?>">
                    <small><?php esc_html_e('Set your basket horizontal offset in px (Ex. 60)', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_count_position">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Basket Count Position', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <select class="wceazy_floating_cart_select_field">
                        <option value=""><?php esc_html_e('Please select', 'wceazy'); ?></option>
                        <option value="top_left" <?php echo esc_attr("top_left" == $wceazy_fc_basket_count_position ? "selected" : ""); ?>><?php esc_html_e('Top Left', 'wceazy'); ?></option>
                        <option value="top_right" <?php echo esc_attr("top_right" == $wceazy_fc_basket_count_position ? "selected" : ""); ?>><?php esc_html_e('Top Right', 'wceazy'); ?></option>
                        <option value="bottom_left" <?php echo esc_attr("bottom_left" == $wceazy_fc_basket_count_position ? "selected" : ""); ?>><?php esc_html_e('Bottom Left', 'wceazy'); ?></option>
                        <option value="bottom_right" <?php echo esc_attr("bottom_right" == $wceazy_fc_basket_count_position ? "selected" : ""); ?>><?php esc_html_e('Bottom Right', 'wceazy'); ?></option>
                    </select>
                </div>
            </div>

            <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_icon_color">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Basket Icon Color', 'wceazy'); ?> <span style="color: #FF521D;">(Pro)</span></label>
                <div class="field_with_msg_container">
                    <div class="color_picker_area">
                        <input disabled type="color" id="wceazy_floating_cart_basket_icon_color" value="<?php echo esc_attr($wceazy_fc_basket_icon_color); ?>">
                        <label for="wceazy_floating_cart_basket_icon_color"><?php esc_html_e('Select Color', 'wceazy'); ?></label>
                    </div>
                </div>
            </div>

            <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_bg_color">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Basket Background Color', 'wceazy'); ?> <span style="color: #FF521D;">(Pro)</span></label>
                <div class="field_with_msg_container">
                    <div class="color_picker_area">
                        <input disabled type="color" id="wceazy_floating_cart_basket_bg_color" value="<?php echo esc_attr($wceazy_fc_basket_bg_color); ?>">
                        <label for="wceazy_floating_cart_basket_bg_color"><?php esc_html_e('Select Color', 'wceazy'); ?></label>
                    </div>
                </div>
            </div>

            <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_count_color">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Basket Count Color', 'wceazy'); ?> <span style="color: #FF521D;">(Pro)</span></label>
                <div class="field_with_msg_container">
                    <div class="color_picker_area">
                        <input disabled type="color" id="wceazy_floating_cart_basket_count_color" value="<?php echo esc_attr($wceazy_fc_basket_count_color); ?>">
                        <label for="wceazy_floating_cart_basket_count_color"><?php esc_html_e('Select Color', 'wceazy'); ?></label>
                    </div>
                </div>
            </div>

            <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_count_bg_color">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Basket Count Background Color', 'wceazy'); ?> <span style="color: #FF521D;">(Pro)</span></label>
                <div class="field_with_msg_container">
                    <div class="color_picker_area">
                        <input disabled type="color" id="wceazy_floating_cart_basket_count_bg_color" value="<?php echo esc_attr($wceazy_fc_basket_count_bg_color); ?>">
                        <label for="wceazy_floating_cart_basket_count_bg_color"><?php esc_html_e('Select Color', 'wceazy'); ?></label>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="coupon_tab_body" data-id="tab_add_to_cart">
        <div class="tab_body_title">
            <h1><?php esc_html_e('Add to Cart Button Settings', 'wceazy'); ?></h1>
        </div>
        <div class="tab_body_form">

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_enable_product_ajax_to_cart">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Ajax add to cart on single product', 'wceazy'); ?> <span style="color: #FF521D;">(Pro)</span></label>
                <div class="field_with_msg_container">
                    <label class="toggle_switch"><input disabled type="checkbox" <?php echo esc_attr($wceazy_occ_enable_product_ajax_to_cart == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                    <small><?php esc_html_e('Turn on to enable ajax add to cart on single product.', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_change_add_to_cart_button_text">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Change Add to cart button text', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_occ_change_add_to_cart_button_text == "yes" ? "checked" : ""); ?> onchange="wceazy_one_click_checkout_selection_changed()"><span class="slider round"></span></label>
                    <small><?php esc_html_e('Turn on to change the button text of add to cart button.', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_cart_button_text">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Add to cart button text', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <input class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_cart_button_text); ?>">
                    <small><?php esc_html_e('This text will be shown inside add to cart button.', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_select_options_button_text">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Select options button text', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <input class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_select_options_button_text); ?>">
                    <small><?php esc_html_e('This text will be shown on the archive page for the variable product, leave blank if you want to use default text.', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_read_more_button_text">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Read more button text', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <input class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_read_more_button_text); ?>">
                    <small><?php esc_html_e('This text will be shown on archive page for the product when the product is out of stock, leave blank if you want to use default text.', 'wceazy'); ?></small>
                </div>
            </div>

        </div>
    </div>


    <div class="coupon_tab_body" data-id="tab_buy_now_button">
        <div class="tab_body_title">
            <h1><?php esc_html_e('Buy Now Button Settings', 'wceazy'); ?></h1>
        </div>
        <div class="tab_body_form">

            <h4><?php esc_html_e('On product page', 'wceazy'); ?></h4>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_enable_buy_now_button_on_product">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Buy now button ?', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_occ_enable_buy_now_button_on_product == "yes" ? "checked" : ""); ?> onchange="wceazy_one_click_checkout_selection_changed()"><span class="slider round"></span></label>
                    <small><?php esc_html_e('Turn on if you want Buy Now button on the product page.', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_btn_label_on_product">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Buy now button label', 'wceazy'); ?> <span style="color: #FF521D;">(Pro)</span></label>
                <div class="field_with_msg_container">
                    <input disabled class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_btn_label_on_product); ?>">
                    <small><?php esc_html_e('Buy now button label', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_btn_redirect_on_product">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Redirect to page', 'wceazy'); ?> <span style="color: #FF521D;">(Pro)</span></label>
                <div class="field_with_msg_container">
                    <select disabled class="wceazy_one_click_checkout_select_field">
                        <option value=""><?php esc_html_e('Please select', 'wceazy'); ?></option>
                        <?php foreach (get_pages() as $single_page) { ?>
                            <option value="<?php echo esc_attr(get_permalink($single_page->ID)); ?>" <?php echo esc_attr(get_permalink($single_page->ID) == $wceazy_occ_buy_btn_redirect_on_product ? "selected" : ""); ?>> <?php echo esc_attr($single_page->post_title); ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_btn_position_on_product">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Position Of the Button', 'wceazy'); ?> <span style="color: #FF521D;">(Pro)</span></label>
                <div class="field_with_msg_container">
                    <select disabled class="wceazy_one_click_checkout_select_field">
                        <option value=""><?php esc_html_e('Please select', 'wceazy'); ?></option>
                        <option value="before_form" <?php echo esc_attr("before_form" == $wceazy_occ_buy_btn_position_on_product ? "selected" : ""); ?>><?php esc_html_e('Before add to cart form', 'wceazy'); ?></option>
                        <option value="after_form" <?php echo esc_attr("after_form" == $wceazy_occ_buy_btn_position_on_product ? "selected" : ""); ?>><?php esc_html_e('After add to cart form', 'wceazy'); ?></option>
                        <option value="before_button" <?php echo esc_attr("before_button" == $wceazy_occ_buy_btn_position_on_product ? "selected" : ""); ?>><?php esc_html_e('Before add to cart button', 'wceazy'); ?></option>
                        <option value="after_button" <?php echo esc_attr("after_button" == $wceazy_occ_buy_btn_position_on_product ? "selected" : ""); ?>><?php esc_html_e('After add to cart button', 'wceazy'); ?></option>
                    </select>
                </div>
            </div>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_btn_size_on_product">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Buy now button width', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <input class="wceazy_one_click_checkout_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_btn_size_on_product); ?>">
                    <small><?php esc_html_e('Buy now button width on the product page (PX).', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_product_mt">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Buy now button margin top', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <input class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_product_mt); ?>">
                    <small><?php esc_html_e('Buy now button margin top (PX).', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_product_mb">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Buy now button margin bottom', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <input class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_product_mb); ?>">
                    <small><?php esc_html_e('Buy now button margin bottom (PX).', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_product_ml">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Buy now button margin left', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <input class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_product_ml); ?>">
                    <small><?php esc_html_e('Buy now button margin left (PX).', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_product_mr">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Buy now button margin right', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <input class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_product_mr); ?>">
                    <small><?php esc_html_e('Buy now button margin right (PX).', 'wceazy'); ?></small>
                </div>
            </div>



            <h4><?php esc_html_e('Buy Now Button design', 'wceazy'); ?></h4>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_color">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Font Color', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <div class="color_picker_area">
                        <input type="color" id="wceazy_one_click_checkout_buy_now_btn_color" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_color); ?>">
                        <label for="wceazy_one_click_checkout_buy_now_btn_color"><?php esc_html_e('Select Color', 'wceazy'); ?></label>
                    </div>
                    <small><?php esc_html_e('Set button font color', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_bg_color">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Background Color', 'wceazy'); ?></label>
                <div class="field_with_msg_container">
                    <div class="color_picker_area">
                        <input type="color" id="wceazy_one_click_checkout_buy_now_btn_bg_color" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_bg_color); ?>">
                        <label for="wceazy_one_click_checkout_buy_now_btn_bg_color"><?php esc_html_e('Select Color', 'wceazy'); ?></label>
                    </div>
                    <small><?php esc_html_e('Set button background color', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_hover_color">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Hover Font Color', 'wceazy'); ?> <span style="color: #FF521D;">(Pro)</span></label>
                <div class="field_with_msg_container">
                    <div class="color_picker_area">
                        <input disabled type="color" id="wceazy_one_click_checkout_buy_now_btn_hover_color" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_hover_color); ?>">
                        <label for="wceazy_one_click_checkout_buy_now_btn_hover_color"><?php esc_html_e('Select Color', 'wceazy'); ?></label>
                    </div>
                    <small><?php esc_html_e('Set button font color on hover', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_hover_bg_color">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Hover Background Color', 'wceazy'); ?> <span style="color: #FF521D;">(Pro)</span></label>
                <div class="field_with_msg_container">
                    <div class="color_picker_area">
                        <input disabled type="color" id="wceazy_one_click_checkout_buy_now_btn_hover_bg_color" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_hover_bg_color); ?>">
                        <label for="wceazy_one_click_checkout_buy_now_btn_hover_bg_color"><?php esc_html_e('Select Color', 'wceazy'); ?></label>
                    </div>
                    <small><?php esc_html_e('Set button background color on hover', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_ptpb">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Padding Top-Bottom', 'wceazy'); ?> <span style="color: #FF521D;">(Pro)</span></label>
                <div class="field_with_msg_container">
                    <input disabled class="wceazy_one_click_checkout_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_ptpb); ?>">
                    <small><?php esc_html_e('Buy now button padding top & bottom (PX)', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_plpr">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Padding Left-Right', 'wceazy'); ?> <span style="color: #FF521D;">(Pro)</span></label>
                <div class="field_with_msg_container">
                    <input disabled class="wceazy_one_click_checkout_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_plpr); ?>">
                    <small><?php esc_html_e('Buy now button padding left & right (PX)', 'wceazy'); ?></small>
                </div>
            </div>

            <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_border_radius">
                <label for="coupon_generator_coupon_amount"><?php esc_html_e('Border Radius', 'wceazy'); ?> <span style="color: #FF521D;">(Pro)</span></label>
                <div class="field_with_msg_container">
                    <input disabled class="wceazy_one_click_checkout_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_border_radius); ?>">
                    <small><?php esc_html_e('Buy now button border radius (PX)', 'wceazy'); ?></small>
                </div>
            </div>


            <div class="coupon_tab_body" data-id="tab_checkout">
                <div class="tab_body_title">
                    <h1><?php esc_html_e('Checkout Settings', 'wceazy'); ?></h1>
                </div>
                <div class="tab_body_form">

                    <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_remove_order_comment">
                        <label for="coupon_generator_coupon_amount"><?php esc_html_e('Remove order comment?', 'wceazy'); ?></label>
                        <div class="field_with_msg_container">
                            <label class="toggle_switch">
                                <input type="checkbox" <?php echo esc_attr($wceazy_occ_remove_order_comment == "yes" ? "checked" : ""); ?>>
                                <span class="slider round"></span>
                            </label>
                            <small><?php esc_html_e('Turn on if you want to remove \'Order Comment\'.', 'wceazy'); ?></small>
                        </div>
                    </div>

                    <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_remove_coupon_form">
                        <label for="coupon_generator_coupon_amount"><?php esc_html_e('Remove coupon form?', 'wceazy'); ?></label>
                        <div class="field_with_msg_container">
                            <label class="toggle_switch">
                                <input type="checkbox" <?php echo esc_attr($wceazy_occ_remove_coupon_form == "yes" ? "checked" : ""); ?>>
                                <span class="slider round"></span>
                            </label>
                            <small><?php esc_html_e('Turn on if you want to remove \'Coupon Form\'.', 'wceazy'); ?></small>
                        </div>
                    </div>

                    <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_remove_policy_text">
                        <label for="coupon_generator_coupon_amount"><?php esc_html_e('Remove policy text?', 'wceazy'); ?> <span style="color: #FF521D;">(Pro)</span></label>
                        <div class="field_with_msg_container">
                            <label class="toggle_switch">
                                <input disabled type="checkbox" <?php echo esc_attr($wceazy_occ_remove_policy_text == "yes" ? "checked" : ""); ?>>
                                <span class="slider round"></span>
                            </label>
                            <small><?php esc_html_e('Turn on if you want to remove \'Policy Text\'.', 'wceazy'); ?></small>
                        </div>
                    </div>

                    <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_remove_terms_condition">
                        <label for="coupon_generator_coupon_amount"><?php esc_html_e('Remove terms & condition?', 'wceazy'); ?> <span style="color: #FF521D;">(Pro)</span></label>
                        <div class="field_with_msg_container">
                            <label class="toggle_switch">
                                <input disabled type="checkbox" <?php echo esc_attr($wceazy_occ_remove_terms_condition == "yes" ? "checked" : ""); ?>>
                                <span class="slider round"></span>
                            </label>
                            <small><?php esc_html_e('Turn on if you want to remove \'Terms & Condition\'.', 'wceazy'); ?></small>
                        </div>
                    </div>

                    <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_remove_billing_fields">
                        <label for="coupon_generator_coupon_amount"><?php esc_html_e('Remove billing fields?', 'wceazy'); ?> <span style="color: #FF521D;">(Pro)</span></label>
                        <div class="field_with_msg_container">
                            <select disabled class="wceazy_one_click_checkout_select_field" multiple="multiple">
                                <option value=""><?php esc_html_e('Please select', 'wceazy'); ?></option>
                                <!-- Add translation for each field if needed -->
                                <option value="billing_first_name" <?php echo esc_attr(in_array("billing_first_name", $wceazy_occ_remove_billing_fields) ? "selected" : ""); ?>><?php esc_html_e('Billing First Name', 'wceazy'); ?></option>
                                <!-- Add translations for other options as needed -->
                            </select>
                            <small><?php esc_html_e('Select the fields that you want to remove from \'Billing Section\'.', 'wceazy'); ?></small>
                        </div>
                    </div>

                    <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_remove_shipping_fields">
                        <label for="wceazy_one_click_checkout_remove_shipping_fields">
                            <?php esc_html_e('Remove shipping fields?'); ?>
                            <span style="color: #FF521D;">
                                <?php esc_html_e('(Pro)', 'wceazy'); ?>
                            </span>
                        </label>
                        <div class="field_with_msg_container">
                            <select disabled class="wceazy_one_click_checkout_select_field" multiple="multiple">
                                <option value="">
                                    <?php esc_html_e('Please select', 'wceazy'); ?>
                                </option>
                                <?php
                                $shipping_fields = array(
                                    'shipping_first_name' => esc_html__('Shipping First Name', 'wceazy'),
                                    'shipping_last_name'  => esc_html__('Shipping Last Name', 'wceazy'),
                                    'shipping_address_1'  => esc_html__('Shipping Address 1', 'wceazy'),
                                    'shipping_address_2'  => esc_html__('Shipping Address 2', 'wceazy'),
                                    'shipping_country'    => esc_html__('Shipping Country', 'wceazy'),
                                    'shipping_city'       => esc_html__('Shipping City', 'wceazy'),
                                    'shipping_state'      => esc_html__('Shipping State', 'wceazy'),
                                    'shipping_postcode'   => esc_html__('Shipping Postcode', 'wceazy'),
                                    'shipping_company'    => esc_html__('Shipping Company', 'wceazy'),
                                );

                                foreach ($shipping_fields as $field_key => $field_label) {
                                    echo '<option value="' . esc_attr($field_key) . '" ' . (in_array($field_key, $wceazy_occ_remove_shipping_fields) ? 'selected' : '') . '>' . esc_html($field_label) . '</option>';
                                }
                                ?>
                            </select>
                            <small>
                                <?php esc_html_e('Select the fields that you want to remove from \'Shipping Section\'.', 'wceazy'); ?>
                            </small>
                        </div>
                    </div> 
                </div>
            </div>

        </div>
    </div> 
    <div class="wceazy_one_click_checkout_bottom_button_section">
        <button onclick="wceazy_one_click_checkout_save();"><?php esc_html_e('Save Settings', 'wceazy'); ?></button>
    </div>



</div>

</div>