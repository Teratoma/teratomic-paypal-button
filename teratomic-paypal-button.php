<?php
/*
Plugin Name: teratomic-paypal-button
Plugin URI: http://KevinByrd.co/WP
Description: Just an addon for the WP Simple Paypal Shopping Cart. A widget that\'s simply a button the pulls the post or page title into the PRODUCT-NAME, and a custom field value into the PRICE.
Version: 0.1
Author: Darren Meehan & Kevin Byrd
Author URI: http://KevinByrd.co
*/

function widget_TeratomicPaypalButton($args) {
	extract($args);
	echo $before_widget;
	$productid = get_the_title();
	$price = get_post_custom_values('item_price');?>
	<div class="teratomic-title-widget"> 
		<?php echo print_wp_cart_button_for_product("$productid", "$price[0]"); ?>
	</div>
<?php
	echo $after_widget; 
}

function widget_TeratomicPaypalButton2($args) {
    extract($args);
	echo $before_widget;
	$productid = get_post_custom_values('item_name');
	$price = get_post_custom_values('item_price');?>
	<div class="teratomic-title-widget"> 
		<?php echo print_wp_cart_button_for_product("$productid[0]", "$price[0]"); ?>
	</div>
<?php
    echo $after_widget;
}

function dm_teratomic1_function () {
	$productid = get_the_title();
	$price = get_post_custom_values('item_price'); ?>
	<div class="teratomic-title-shortcode"> 
		<?php echo print_wp_cart_button_for_product("$productid", "$price[0]"); ?>
	</div>
<?php
}

function dm_teratomic2_function () {
	$productid = get_post_custom_values('item_name');
	$price = get_post_custom_values('item_price');
	?>
	<div class="teratomic-custom-shortcode"> 
	<?php echo print_wp_cart_button_for_product("$productid[0]", "$price[0]"); ?> </div>
<?php
}

// Registering the shortcodes and widgets now

add_shortcode('teratomic-title', 'dm_teratomic1_function');
add_shortcode('teratomic-custom', 'dm_teratomic2_function');

wp_register_sidebar_widget(
	'Teratomic-Paypal-Button-Custom', // unique widget id
	'Teratomic Paypal Button Custom', // widget name
	'widget_TeratomicPaypalButton2', // callback function
    array(                  // options
        'description' => 'Description'
    )
);

wp_register_sidebar_widget(
	'Teratomic-Paypal-Button-Title', // unique widget id
	'Teratomic Paypal Button Title', // widget name
	'widget_TeratomicPaypalButton', // callback function
    array(                  // options
        'description' => 'Description'
    )
);