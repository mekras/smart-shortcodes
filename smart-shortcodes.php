<?php
/**
 * Smart ShortCodes.
 *
 * @wordpress-plugin
 * Plugin Name: Smart Shortcodes
 * Plugin URI:  https://github.com/mekras/smart-shortcodes
 * Description: Shortcode collection for WordPress.
 * Version:     1.0
 * Author:      Михаил Красильников
 * Author URI:  http://mihalych.vsepofigu.ru
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Domain Path: /languages
 * Text Domain: smart-shortcodes
 *
 * Smart ShortCodes is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Smart ShortCodes is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Smart ShortCodes. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

if ( !is_admin() ) {
    require plugin_dir_path( __FILE__ ) . 'public/init.php';
}
