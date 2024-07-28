<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/routes.php';

use FastRoute\RouteCollector;

$dispatcher = FastRoute\simpleDispatcher(function(RouteCollector $r) {
    $r->addRoute('POST', '/recipes', 'createRecipe');
    $r->addRoute('GET', '/recipesid', 'display');
    $r->addRoute('GET', '/recipes', 'listRecipes');
    $r->addRoute('GET', '/recipes/{id:\d+}', 'getRecipe');
    $r->addRoute('PUT', '/recipes/{id:\d+}', 'updateRecipe');
    $r->addRoute('DELETE', '/recipes/{id:\d+}', 'deleteRecipe');
    $r->addRoute('POST', '/recipes/{id:\d+}/rating', 'rateRecipe');
});

// Fetch method and URI
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        http_response_code(404);
        echo '404 Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        http_response_code(405);
        echo '405 Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        call_user_func($handler, $vars);
        break;
}
