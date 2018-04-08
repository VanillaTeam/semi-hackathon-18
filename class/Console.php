<?php
/**
 * File: Console.php
 *
 * @copyright 2018 Vanilla
 * @author Vanilla Team
 * @version 0.1
 * @package Semi-Hackathon
 *
 */

class Console {

	public function __construct() {
		define("NL","\r\n");
		/// Данный код предназначен для браузеров без консоли
		echo '<script type="text/javascript">'.NL;
		echo 'if (!window.console) console = {};';
		echo 'console.log = console.log || function(){};';
		echo 'console.warn = console.warn || function(){};';
		echo 'console.error = console.error || function(){};';
		echo 'console.info = console.info || function(){};';
		echo 'console.debug = console.debug || function(){};';
		echo '</script>';
	}

	public function log($type, $str) {
		if (!$str) {
			return;
		}
		
		echo '<script type="text/javascript">'.NL;
		switch ($type) {
		case 'error':
			echo 'console.error("Error: ' . $str . '");'.NL;
			break;

		case 'warning':
			echo 'console.warn("Warning: ' . $str . '");'.NL;
			break;

		case 'info':
			echo 'console.info("Info: ' . $str . '");'.NL;
			break;

		default:
			echo 'console.error("Unknown error: ' . $str . '");'.NL;
			break;
		}
		echo '</script>'.NL;
	}
	
	public function php_log($errno, $errstr, $errfile, $errline) {
		if (!(error_reporting() & $errno)) {
			// Этот код ошибки не включен в error_reporting
			return;
		}
		
		$errstr = addslashes( $errstr );
		$errfile = addslashes( $errfile );
		$errline = addslashes( $errline );
		
		echo '<script type="text/javascript">'.NL;
		switch ($errno) {
		case E_ERROR:
			echo 'console.error("Error: ' . $errstr . ' in ' . $errfile . ' on line ' . $errline . '");'.NL;
			break;

		case E_PARSE:
			echo 'console.error("Error: ' . $errstr . ' in ' . $errfile . ' on line ' . $errline . '");'.NL;
			break;

		case E_CORE_ERROR:
			echo 'console.error("Error: ' . $errstr . ' in ' . $errfile . ' on line ' . $errline . '");'.NL;
			break;

		case E_COMPILE_ERROR:
			echo 'console.error("Error: ' . $errstr . ' in ' . $errfile . ' on line ' . $errline . '");'.NL;
			break;

		case E_USER_ERROR:
			echo 'console.error("Error: ' . $errstr . ' in ' . $errfile . ' on line ' . $errline . '");'.NL;
			break;

		case E_USER_ERROR:
			echo 'console.error("Error: ' . $errstr . ' in ' . $errfile . ' on line ' . $errline . '");'.NL;
			break;

		case E_WARNING:
			echo 'console.warn("Warning: ' . $errstr . ' in ' . $errfile . ' on line ' . $errline . '");'.NL;
			break;

		case E_CORE_WARNING:
			echo 'console.warn("Warning: ' . $errstr . ' in ' . $errfile . ' on line ' . $errline . '");'.NL;
			break;

		case E_COMPILE_WARNING:
			echo 'console.warn("Warning: ' . $errstr . ' in ' . $errfile . ' on line ' . $errline . '");'.NL;
			break;

		case E_USER_WARNING:
			echo 'console.warn("Warning: ' . $errstr . ' in ' . $errfile . ' on line ' . $errline . '");'.NL;
			break;

		case E_DEPRECATED:
			echo 'console.warn("Warning: ' . $errstr . ' in ' . $errfile . ' on line ' . $errline . '");'.NL;
			break;

		case E_USER_DEPRECATED:
			echo 'console.warn("Warning: ' . $errstr . ' in ' . $errfile . ' on line ' . $errline . '");'.NL;
			break;

		case E_NOTICE:
			echo 'console.info("Notice: ' . $errstr . ' in ' . $errfile . ' on line ' . $errline . '");'.NL;
			break;

		case E_USER_NOTICE:
			echo 'console.info("Notice: ' . $errstr . ' in ' . $errfile . ' on line ' . $errline . '");'.NL;
			break;

		case E_STRICT:
			echo 'console.info("Notice: ' . $errstr . ' in ' . $errfile . ' on line ' . $errline . '");'.NL;
			break;

		default:
			echo 'console.error("Unknown error: ' . $errstr . ' in ' . $errfile . ' on line ' . $errline . '");'.NL;
			break;
		}
		echo '</script>'.NL;

		/* Не запускаем внутренний обработчик ошибок PHP */
		return true;
	}
	
}
?>