<?php
/**
 * Author:      Robert Pratt
 * Author URI:  https://www.v8ch.com/
 * Description: Writes debugging objects to log.
 * License:     MIT
 * License URI: https://opensource.org/licenses/MIT
 * Plugin Name: V8CH Write Debug Log
 * Plugin URI:  https://github.com/V8CH/write-debug-log
 * Text Domain: write-debug-log
 * Version:     0.0.1
 *
 * @category Development
 * @package  Declaration
 * @author   Robert Pratt <bpong@v8ch.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/V8CH/write-debug-log
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'write_log' ) ) {

	/**
	 * Outputs message to debug.log
	 *
	 * @param   array|object|string $log Object to log.
	 * @return  void
	 */
	function write_log( $log ) {
		if ( is_array( $log ) || is_object( $log ) ) {
			error_log( print_r( $log, true ) );
		} else {
			error_log( $log );
		}
	}
}

