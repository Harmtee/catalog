<?php
use App\Controllers\CatalogController;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/helpers.php';

// Get the path from the URL
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$projectFolder = basename(__DIR__);

$projectFolder = str_replace('/', '\/', $projectFolder); // Escape forward slashes for regex
if (preg_match('/' . $projectFolder . '\/?/i', $path)) {
    $path = preg_replace('/' . $projectFolder . '\/?/i', '', $path);
}

// Remove the leading slash
$path = ltrim($path, '/');

// If no path is provided, use 'home' as a default
if (empty($path)) {
    $path = 'show';
}

// Split the path into segments
$segments = explode('/', $path);

$method = end($segments);

// Convert the method name to camelCase
$method = hyphenToCamelCase($method);

// Create a new instance of the controller
$controller = new CatalogController();

// Check if the method exists in the controller
if (method_exists($controller, $method)) {
    // Call the method on the controller
    $controller->$method();
} else {
    $controller->notFound();
}
