<?php
/**
 * Twenty Fifteen back compat functionality
 *
 * Prevents Twenty Fifteen from running on RustyRadio versions prior to 4.1,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.1.
 *
 * @package RustyRadio
 * @subpackage theme
 * @since Rusty Radio 0.1
 */

/**
 * Prevent switching to Twenty Fifteen on old versions of RustyRadio.
 *
 * Switches to the default theme.
 *
 * @since Rusty Radio 0.1
 */
function rustyradio_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'rustyradio_upgrade_notice' );
}
add_action( 'after_switch_theme', 'rustyradio_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Twenty Fifteen on RustyRadio versions prior to 4.1.
 *
 * @since Rusty Radio 0.1
 */
function rustyradio_upgrade_notice() {
	$message = sprintf( __( 'Twenty Fifteen requires at least RustyRadio version 4.1. You are running version %s. Please upgrade and try again.', 'rustyradio' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on RustyRadio versions prior to 4.1.
 *
 * @since Rusty Radio 0.1
 */
function rustyradio_customize() {
	wp_die( sprintf( __( 'Twenty Fifteen requires at least RustyRadio version 4.1. You are running version %s. Please upgrade and try again.', 'rustyradio' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'rustyradio_customize' );

/**
 * Prevent the Theme Preview from being loaded on RustyRadio versions prior to 4.1.
 *
 * @since Rusty Radio 0.1
 */
function rustyradio_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Twenty Fifteen requires at least RustyRadio version 4.1. You are running version %s. Please upgrade and try again.', 'rustyradio' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'rustyradio_preview' );
