<?php
/**
 * File: index.php
 *
 * @copyright 2018 Vanilla
 * @author Vanilla Team
 * @version 0.1
 * @package Semi-Hackathon
 *
 */

require_once 'config.php';

try {
	// Загрузка страницы
	$REQUEST = new Router($_SERVER['REQUEST_URI']);
	include $HTML_STATIC_FOLDER . '/header.html';
	include $REQUEST->getTemplate();
	include $HTML_STATIC_FOLDER . '/footer.html';
}
catch(Exception $e) {
	printError($e->getMessage());
}
?>