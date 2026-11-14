<?php
declare(strict_types=1);

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/');
$uri = rtrim($uri, '/') ?: '/';

if ($uri !== '/' && is_file(__DIR__ . $uri)) {
    return false;
}

$map = [
    '/'         => 'index.php',
    '/about'    => 'about.php',
    '/trade'    => 'trade.php',
    '/contact'  => 'contact.php',
];

if (isset($map[$uri])) {
    require __DIR__ . '/' . $map[$uri];
    return true;
}

http_response_code(404);
require __DIR__ . '/404.php';
return true;
