<?php
define('SERVER_PORT',(!empty($_SERVER['SERVER_PORT']) ? ':' . $_SERVER['SERVER_PORT'] : ''));
define('SITE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . SERVER_PORT);
define('ASSET_URL' , SITE_URL . '/assets');
define('IMG_URL' , ASSET_URL . '/image');
define('BASE_DIR', dirname(__DIR__));
define('APP_DIR', dirname(__DIR__) . '\App');
define('VIEW_DIR', APP_DIR . '\Views');

const IMG_DIR = BASE_DIR . '\public\assets\image';
const CATEGORIES_IMG_DIR = IMG_DIR . "\categories\\";
const POST_IMG_DIR = IMG_DIR . "\posts\\";

