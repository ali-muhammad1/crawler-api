<?php

$router = $di->getRouter();

$router->setDI($di);
$router->setUriSource(\Phalcon\Mvc\Router::URI_SOURCE_SERVER_REQUEST_URI);

// Define your routes here

$router->add("/crawler/", array(
    "controller" => "Crawler",
    "action"     => "Index",
));
$router->handle($_SERVER['REQUEST_URI']);
