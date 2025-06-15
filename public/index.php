<?php
session_start();

// Set language session variable if not set
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'fr'; // Default language
}

// Simple language loader
$langFile = __DIR__ . '/../app/Lang/' . $_SESSION['lang'] . '.php';
$lang_data = file_exists($langFile) ? include($langFile) : include(__DIR__ . '/../app/Lang/en.php');

// Translation helper
function t($key) {
    global $lang_data;
    return $lang_data[$key] ?? $key;
}

// Require the Router
require_once __DIR__ . '/../core/Router.php';

$router = new Router();

// Register your routes here
$router->get('/', 'HomeController@index');
$router->get('/login', 'UserController@login');
$router->post('/login', 'UserController@loginPost');
$router->get('/profile', 'UserController@profile');
$router->get('/lang/en', function() {
    $_SESSION['lang'] = 'en';
    header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? '/'));
    exit;
});
$router->get('/lang/fr', function() {
    $_SESSION['lang'] = 'fr';
    header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? '/'));
    exit;
});
$router->get('/logout', 'UserController@logout');

// Dispatch based on current method and URI
$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->dispatch($method, $uri);
