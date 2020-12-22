<?php

/**
 * Plugin Name: Easy Insert Code
 * Plugin URI: http://www.kauniaweb.com/easy-insert-code
 * Description: Easy Insert Code plugin helps you to insert code/text/script in the header ( <head> ),footer( </body> ) and body<body> tag of your WordPress websites
 * Author: Arafat Rahman
 * Version: 1.0.0
 * Author URI:   http://kauniaweb.com/
 * Text Domain:  easy-insert-code
 * Domain Path: /languages
 */
define("EIC_PATH", dirname(__FILE__));
define('EIC_ASSETS_DIR_URI', plugins_url('assets', __FILE__));

function EIC_plugin_load()
{
    include_once EIC_PATH . "/classes/eic-settings.php";
    if (is_admin()) {
        include_once EIC_PATH . "/classes/eic-admin.php";
        EIC_admin::Init();
    }
}

EIC_plugin_load();
add_action('admin_enqueue_scripts', 'eic_admin_styles');

function eic_admin_styles()
{
    $screen = get_current_screen();
    if ('settings_page_easy-insert-code' == $screen->id) {
        wp_enqueue_style('eic_admin', plugins_url('assets/css/eic-style.css', __FILE__), array(), '0.0.1');
        wp_enqueue_script('eic_main', plugins_url('assets/js/eic-script.js', __FILE__), array(), '0.0.1');
    }
}

add_action('wp_head', 'eic_show_header');
add_action('wp_footer', 'eic_show_footer');


if (!function_exists('eic_show_header')) {
    function eic_show_header()
    {
        $eicValue = EIC_setting::getEic();

        
        echo htmlspecialchars_decode(eicget('kau-eic-textarea-header', $eicValue));
    }
}

if (!function_exists('eic_show_footer')) {
    function eic_show_footer()
    {
        $eicValue = EIC_setting::getEic();
        echo htmlspecialchars_decode(eicget('kau-eic-textarea-footer', $eicValue));
    }
}

if (function_exists('wp_body_open') && version_compare(get_bloginfo('version'), '5.2', '>=')) {
    add_action('wp_body_open', 'eic_show_body');
    function eic_show_body()
    {

        $eicValue = EIC_setting::getEic();
        echo htmlspecialchars_decode(eicget('kau-eic-textarea-body', $eicValue));
    }
}

if (!function_exists('eic_post')) {

    function eic_post($key, $array = false)
    {
        if ($array) {
            return filter_input(INPUT_POST, $key, FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        }
        if (filter_input(INPUT_POST, $key)) {
            return filter_input(INPUT_POST, $key);
        }
        return false;
    }
}

if (!function_exists('eicget')) {

    function eicget($name, $array = null)
    {

        if (!isset($array)) {
            return eic_post($name);
        }

        if (is_array($array)) {
            if (isset($array[$name])) {
                return wp_unslash($array[$name]);
            }
            return false;
        }

        if (is_object($array)) {
            if (isset($array->$name)) {
                return wp_unslash($array->$name);
            }
            return false;
        }

        return false;
    }
}
