<?php
/**
 * Create select with Countries list as value.
 *
 * @package wpcf7 Advanced
 */

/**
 * Load custom scripts
 */
function additional_field_scripts() {
	wp_register_script( 'additional-field-scripts', __DIR__ . '/assets/custom-tag-generator.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'additional-field-scripts' );
}

add_action( 'admin_enqueue_scripts', 'additional_field_scripts' );

/* Countries List */
require_once __DIR__ . '/includes/fields/field-select-country.php';

/* Phone Number Field */
require_once __DIR__ . '/includes/fields/field-tel-phone.php';
