<?php
/**
 * floating cart content template
 */
if ( ! defined( 'WPINC' ) ) {
	exit;
}

$wceazy_fc_bset_icon = !empty($this->wfc_settings) && isset($this->wfc_settings['wceazy_fc_bset_icon']) ? $this->wfc_settings['wceazy_fc_bset_icon'] : 'icon-basket1';
?>

<style>

    @font-face {
	    font-family: 'fontello';
	    src: url(<?php echo WCEAZY_CSS_DIR . 'fonts/fontello.eot?50396587'?>);
	    src: url(<?php echo WCEAZY_CSS_DIR . 'fonts/fontello.eot?50396587#iefix'?>) format('embedded-opentype'),
	    url(<?php echo WCEAZY_CSS_DIR . 'fonts/fontello.woff?50396587'?>) format('woff'),
	    url(<?php echo WCEAZY_CSS_DIR . 'fonts/fontello.ttf?50396587'?>) format('truetype'),
	    url(<?php echo WCEAZY_CSS_DIR . 'fonts/fontello.svg?50396587#fontello'?>) format('svg');
	    font-weight: normal;
	    font-style: normal;
    }

</style>

<div id="wceazy-fct" class="wceazy-fct-icon" style="display: none;">
    <button><i class="demo-icon <?php echo $wceazy_fc_bset_icon; ?>"></i></button>
    <?php
    if( !empty($this->wfc_settings) && isset( $this->wfc_settings['wceazy_fc_sc_style'] ) ){
        if( !empty( $this->wfc_settings ) && ($this->wfc_settings['wffc_bascket_count'] == 'number_of_products') ){
            echo '<span class="wofusion-fci-total wffc_cart_contents_count">'.count(WC()->cart->get_cart()).'</span>';
        }else{
            echo '<span class="wofusion-fci-total wffc_cart_contents_count">'.WC()->cart->get_cart_contents_count().'</span>';
        }
    }
    ?>
</div>

<div id="wceazy_floating_cart_init"></div>