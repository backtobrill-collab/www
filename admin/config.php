<?php
$root = dirname(__DIR__) . '/';
$is_local = getenv('APP_ENV') === 'local';

if ($is_local) {
	$catalog_url = rtrim(getenv('HTTP_SERVER') ?: 'http://localhost:8080/', '/') . '/';
	$admin_url = $catalog_url . 'admin/';

	// HTTP
	define('HTTP_SERVER', $admin_url);
	define('HTTP_CATALOG', $catalog_url);

	// HTTPS
	define('HTTPS_SERVER', $admin_url);
	define('HTTPS_CATALOG', $catalog_url);

	// DIR
	define('DIR_APPLICATION', $root . 'admin/');
	define('DIR_SYSTEM', $root . 'system/');
	define('DIR_IMAGE', $root . 'image/');
	define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
	define('DIR_CATALOG', $root . 'catalog/');
	define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
	define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
	define('DIR_CONFIG', DIR_SYSTEM . 'config/');
	define('DIR_CACHE', DIR_STORAGE . 'cache/');
	define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
	define('DIR_LOGS', DIR_STORAGE . 'logs/');
	define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
	define('DIR_SESSION', DIR_STORAGE . 'session/');
	define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

	// DB
	define('DB_DRIVER', getenv('DB_DRIVER') ?: 'mysqli');
	define('DB_HOSTNAME', getenv('DB_HOSTNAME') ?: '127.0.0.1');
	define('DB_USERNAME', getenv('DB_USERNAME') ?: 'root');
	define('DB_PASSWORD', getenv('DB_PASSWORD') ?: '');
	define('DB_DATABASE', getenv('DB_DATABASE') ?: 'opencart');
	define('DB_PORT', getenv('DB_PORT') ?: '3306');
	define('DB_PREFIX', getenv('DB_PREFIX') ?: 'oc_');
} else {
	// HTTP
	define('HTTP_SERVER', 'https://don-fish.com/admin/');
	define('HTTP_CATALOG', 'https://don-fish.com/');

	// HTTPS
	define('HTTPS_SERVER', 'https://don-fish.com/admin/');
	define('HTTPS_CATALOG', 'https://don-fish.com/');

	// DIR
	define('DIR_APPLICATION', '/var/www/u1805311/data/www/don-fish.com/admin/');
	define('DIR_SYSTEM', '/var/www/u1805311/data/www/don-fish.com/system/');
	define('DIR_IMAGE', '/var/www/u1805311/data/www/don-fish.com/image/');
	define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
	define('DIR_CATALOG', '/var/www/u1805311/data/www/don-fish.com/catalog/');
	define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
	define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
	define('DIR_CONFIG', DIR_SYSTEM . 'config/');
	define('DIR_CACHE', DIR_STORAGE . 'cache/');
	define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
	define('DIR_LOGS', DIR_STORAGE . 'logs/');
	define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
	define('DIR_SESSION', DIR_STORAGE . 'session/');
	define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

	// DB
	define('DB_DRIVER', 'mysqli');
	define('DB_HOSTNAME', 'localhost');
	define('DB_USERNAME', 'u1805311_donfish');
	define('DB_PASSWORD', 'Yippeewoopbloom2000#');
	define('DB_DATABASE', 'u1805311_donfish');
	define('DB_PORT', '3306');
	define('DB_PREFIX', 'oc_');
}
