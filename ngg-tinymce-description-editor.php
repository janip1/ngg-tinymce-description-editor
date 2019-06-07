<?php
/*
 * Plugin Name:  NextGen Gallery Tinymce Description editor
 * Description:  NextGen Gallery Tinymce Description editor
 * Version:      1.0.0
 * Author:       Jani Poklar
 * Author URI:   https://github.com/janip1
 * License:      GPL2
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: ngg-tinymce-description-editor
 * 
 * NextGen Gallery Tinymce Description editor is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * NextGen Gallery Tinymce Description editor is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with NextGen Gallery Tinymce Description editor. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

//No direct access to this file
define('WPINC', 'ngg-tinymce-description-editor');
if(!defined( 'WPINC')) die('Restricted access');

if( is_admin() && isset($_GET['page']) && $_GET['page'] == 'nggallery-manage-gallery' ){  
    /*
     * Scripts function used to enqueue tinymce scripts
     * 
     * @param wp_enqueue_script, wp_enqueue_style
     * @return css and js scripts
     */
    function scripts() {
        wp_enqueue_script('tinymce', plugins_url( '/inc/tinymce/js/tinymce/tinymce.min.js', __FILE__ )); // Enqueue tinymce editor
        wp_enqueue_script('functions-js', plugins_url('/functions.js', __FILE__)); // Enqueue js functions
        wp_enqueue_style('tiny-style', plugins_url('/style.css', __FILE__)); // Enqueue cutom style
    }
    add_action('admin_enqueue_scripts', 'scripts');
}
?>