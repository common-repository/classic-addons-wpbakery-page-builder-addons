<?php
/**
 * Animated Headings Addon Settings
*/
 
/*
**========== Direct access not allowed =========== 
*/
if( ! defined('ABSPATH' ) ){ exit; }

$params = array(
    array(
        "type" => "textfield",
        "param_name" => "before_heading",
        "heading" => __("Before Text", "classic-addons"),
        "value" => "We are here to",
        "description" => __("Provide text to display before animated words", "classic-addons"),
    ),
    array(
        "type" => "exploded_textarea",
        "param_name" => "spin_headings",
        "heading" => __("Animated Headings", "classic-addons"),
        "value" => __("Help\nAssist\nGuide\nTake care of", "classic-addons"),
        "description" => __("Provide headings for spin, each per line", "classic-addons"),
    ),
    array(
        "type" => "textfield",
        "param_name" => "after_heading",
        "heading" => __("After Text", "classic-addons"),
        "value" => "you...",
        "description" => __("Provide text to display after animated words", "classic-addons"),
    ),
    array(
        "type" => "textfield",
        "param_name" => "spin_timer",
        "heading" => __("Spin Timer", "classic-addons"),
        "description" => __("Set Spin timer in ms eg: 3000", "classic-addons"),
    ),
     array(
        "type" => "textfield",
        "param_name" => "after_margin",
        "heading" => __("Heading Margin Bottom", "classic-addons"),
        "description" => __("Provide margin bottom after text eg: 10px", "classic-addons"),
    ),
    array(
        "type" => "textarea_html",
        "param_name" => "content",
        "value" => "An optional subheading goes here",
        "heading" => __("Description", "classic-addons"),
        "description" => __("Provide contents to show under heading", "classic-addons"),
    ),
    array(
		"type" 			=> 	"textfield",
		"heading" 		=> 	__( 'Extra CSS classes', 'classic-addons' ),
		"param_name" 	=> 	"extra_classes",
		"description" 	=> 	__( 'Provide the extra classes for custom style.', 'classic-addons' ),
	),
);