<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$file = __DIR__ . $uri;

if ($uri !== '/' && is_file($file)) {
	return false;
}

if (str_starts_with($uri, '/admin')) {
	require __DIR__ . '/admin/index.php';
	return true;
}

require __DIR__ . '/index.php';
