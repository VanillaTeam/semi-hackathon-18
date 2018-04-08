<?php
// Подгрузка нужных частей сраницы
if (!$IS_MOBILE) {
	include $HTML_STATIC_FOLDER . '/menu.html';
}
include $HTML_STATIC_FOLDER . '/title.html';
include $HTML_STATIC_FOLDER . '/about.html';
include $HTML_STATIC_FOLDER . '/members.html';
?>