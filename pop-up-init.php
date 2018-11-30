<?php
/**
 *Author: Willian de Oliveira
 * Plugin Name: Pop-Up - Arteref news form 
 * Plugin URI: https://arteref.com
 * Description: Insere formulario para inscrição da newsletter. 
 * Author URI: Willian De Oliveira 
 * Version: 1.0 BETA
 * Licence: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
//carrega template da página home 
require 'content/pop-up-index.php';

function home_arteref_pop_up_register_scripts(){

    wp_enqueue_script('arteref_pop_up', plugins_url('content/js/index.js', __FILE__), 'jquery', 1.4, true);
    wp_enqueue_script('bootstrap_js_arteref', plugins_url('content/js/bootstrap.js', __FILE__), 'jquery', 1.4, true);
    $page = get_page_by_title('home');

    if (!is_page($page->ID)) {
        wp_enqueue_style('bootstrap_arteref', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    }
    wp_enqueue_style('arteref_pop_up', plugins_url('pop-up-arteref-newsletter/content/css/index.css'));
    
}
add_action('wp_enqueue_scripts', 'home_arteref_pop_up_register_scripts');

function home_arteref_pop_up() {
    return  pop_up_index();
}
add_action('wp_footer', 'home_arteref_pop_up');