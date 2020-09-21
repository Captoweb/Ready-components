<?php

include 'functions.php';


$routes = [
    "/" => 'functions/homepage.php',
    "/about" => 'functions/about.php'
];

$route = $_SERVER['REQUEST_URI'];

if (array_key_exists($route, $routes)){
    include $routes[$route]; exit;
} else {
    dd(404);
}
 


$db = include 'database/start.php';

$posts = $db->getAll('posts');

include 'index.view.php';

?>

