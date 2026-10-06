<?php

declare(strict_types= 1);

require_once __DIR__ . '/../vendor/autoload.php';
use App\Core\Router;
use App\Core\Request;

$router = new Router();

// Home page route
// $router->get('/', function() {
//     echo "Home Page";
// });
$router->get('/', function () {
    echo '
        <form method="POST" action="/students">
            <input name="name" placeholder="Name">
            <input name="email" placeholder="Email">
            <input name="age" type="number" placeholder="Age">

            <button type="submit">
                Create Student
            </button>
        </form>
    ';
});
// Students page route
$router->get('/students', function() {
    echo "List Students";
});

// Create student route
$router->post('/students', function() {
    echo "Create Student";
});

// Courses Page
$router->get('/courses' , function() {
    echo "Courses Page";
});

$method = $_SERVER['REQUEST_METHOD'];

$uri = parse_url(
    $_SERVER['REQUEST_URI'],
    PHP_URL_PATH
);

$router->dispatch($method, $uri);
