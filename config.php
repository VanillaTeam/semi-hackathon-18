<?php
/**
 * File: config.php
 *
 * @copyright 2018 Vanilla
 * @author Vanilla Team
 * @version 0.1
 * @package Semi-Hackathon
 *
 */

// Charset
$CHARSET 			= 'utf-8';

// Main roots
$HTTP_HOST     		= getenv( 'HTTP_HOST' );
$DOCUMENT_ROOT 		= rtrim( getenv( 'DOCUMENT_ROOT' ), '/\\' );

// Engine root
$SUB_FOLDER 		= '';

// Http paths
$CLASS_HTTP_PATH	= $SUB_FOLDER . '/class';
$TEMPLATE_HTTP_PATH	= $SUB_FOLDER . '/template';
$STATIC_HTTP_PATH	= $SUB_FOLDER . '/static';

// Static http roots
$CSS_STATIC_HTTP_PATH	= $STATIC_HTTP_PATH . '/css';
$HTML_STATIC_HTTP_PATH	= $STATIC_HTTP_PATH . '/html';
$IMG_STATIC_HTTP_PATH	= $STATIC_HTTP_PATH . '/img';
$JS_STATIC_HTTP_PATH	= $STATIC_HTTP_PATH . '/js';

// Other roots
$CLASS_FOLDER		= $DOCUMENT_ROOT . $CLASS_HTTP_PATH;
$TEMPLATE_FOLDER	= $DOCUMENT_ROOT . $TEMPLATE_HTTP_PATH;
$STATIC_FOLDER		= $DOCUMENT_ROOT . $STATIC_HTTP_PATH;

// Static roots
$CSS_STATIC_FOLDER	= $STATIC_FOLDER . '/css';
$HTML_STATIC_FOLDER	= $STATIC_FOLDER . '/html';
$IMG_STATIC_FOLDER	= $STATIC_FOLDER . '/img';
$JS_STATIC_FOLDER	= $STATIC_FOLDER . '/js';

// Error reporting params
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);

// Log console
require_once $CLASS_FOLDER . '/Console.php';
$CONSOLE = new Console();
set_error_handler( array($CONSOLE, 'php_log') );

function printError($message) {
	global $CONSOLE;
	$CONSOLE->log('error', $message);
	echo '<div class="message" style="font-size: 30px; width: 100%; padding: 1em; text-align: center; color: red;">' . $message . '</div>';
}

// Mobile
if ( isset($_COOKIE['isMobile']) ) {
	$IS_MOBILE = $_COOKIE['isMobile'];
}
else {
	include_once $CLASS_FOLDER . '/MobileDetect.php';
	$MOBILE_DETECT = new MobileDetect();
	$IS_MOBILE = $MOBILE_DETECT->isMobile();
	setcookie(
		'isMobile',
		$IS_MOBILE ? 1 : 0,
		time() + 30*24*60*60,
		'/'
	);
	unset($MOBILE_DETECT);
}

// Includes
include_once $CLASS_FOLDER . '/Router.php';

?>