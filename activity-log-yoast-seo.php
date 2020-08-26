<?php
/**
 * Plugin Name: WP Activity Log Extension for Yoast SEO
 * Plugin URI: https://wpactivitylog.com/extensions/
 * Description: A WP Activity Log plugin extension
 * Text Domain: wsal-yoast
 * Author: WP White Security
 * Author URI: http://www.wpwhitesecurity.com/
 * Version: 1.0.0
 * License: GPL2
 * Network: true
 *
 * @package Wsal
 * @subpackage Wsal Custom Events Loader
 */

/*
	Copyright(c) 2020  WP White Security  (email : info@wpwhitesecurity.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
	REQUIRED. Here we include and fire up the main core class. This will be needed regardless so be sure to leave line 37-39 in tact.
*/
require_once plugin_dir_path( __FILE__ ) . 'core/class-extension-core.php';
$plugin_text_domain = 'wsal-yoast';
$wsal_extension     = new \WPWhiteSecurity\ActivityLog\Extensions\Common\Core( $plugin_text_domain );


/**
 * Adds new custom event objects for our plugin
 *
 * @method wsal_yoast_seo_extension_add_custom_event_objects
 * @since  1.0.0
 * @param  array $objects An array of default objects.
 * @return array
 */
function wsal_yoast_seo_extension_add_custom_event_objects( $objects ) {
	$new_objects = array(
		'yoast-seo'         => __( 'Yoast SEO', 'wp-security-audit-log' ),
		'yoast-seo-metabox' => __( 'Yoast SEO Meta Box', 'wp-security-audit-log' ),
	);

	// combine the two arrays.
	$objects = array_merge( $objects, $new_objects );

	return $objects;
}

/**
 * Adds new ignored CPT for our plugin
 *
 * @method wsal_yoast_seo_extension_add_custom_event_object_text
 * @since  1.0.0
 * @param  array $post_types An array of default post_types.
 * @return array
 */
function wsal_yoast_seo_extension_add_custom_ignored_cpt( $post_types ) {
	$new_post_types = array(
		'wpforms',    // WP Forms CPT.
	);

	// combine the two arrays.
	$post_types = array_merge( $post_types, $new_post_types );
	return $post_types;
}

/**
 * Adds new meta formatting for our plugion
 *
 * @method wsal_yoast_seo_extension_add_custom_meta_format
 * @since  1.0.0
 * @param  string $value The value of te item to be formatted.
 * @param  array  $name  The string to be reformatted.
 */
function wsal_yoast_seo_extension_add_custom_meta_format( $value, $name ) {
	$check_value = (string) $value;
	if ( '%EditorLinkForm%' === $name ) {
		if ( 'NULL' !== $check_value ) {
			return '<a target="_blank" href="' . esc_url( $value ) . '">' . __( 'View form in the editor', 'wp-security-audit-log' ) . '</a>';
		} else {
			return '';
		}
	}
	return $value;
}

/**
 * Adds new meta formatting for our plugion
 *
 * @method wsal_yoast_seo_extension_add_custom_meta_format_value
 * @since  1.0.0
 * @param  string $value The value of te item to be formatted.
 * @param  array  $name  The string to be reformatted.
 */
function wsal_yoast_seo_extension_add_custom_meta_format_value( $value, $name ) {
	$check_value = (string) $value;
	if ( '%EditorLinkForm%' === $name ) {
		if ( 'NULL' !== $check_value ) {
			return '<a target="_blank" href="' . esc_url( $value ) . '">' . __( 'View form in the editor', 'wp-security-audit-log' ) . '</a>';
		} else {
			return '';
		}
	}
	return $value;
}

/**
 * Add our filters.
 */
add_filter( 'wsal_link_filter', 'wsal_yoast_seo_extension_add_custom_meta_format_value', 10, 2 );
add_filter( 'wsal_meta_formatter_custom_formatter', 'wsal_yoast_seo_extension_add_custom_meta_format', 10, 2 );
add_filter( 'wsal_event_objects', 'wsal_yoast_seo_extension_add_custom_event_objects' );
add_filter( 'wsal_ignored_custom_post_types', 'wsal_yoast_seo_extension_add_custom_ignored_cpt' );
