<?php

$uri = $_SERVER['REQUEST_URI'];
$trim_uri = trim($uri, '/');
$clean_uri = parse_url($trim_uri, PHP_URL_PATH);

$routes = [
  '' => 'controllers/index.controller.php',
  'about' => 'controllers/about.controller.php',
  'contact' => 'controllers/contact.controller.php',

];


if (array_key_exists($clean_uri, $routes)) {
  require $routes[$clean_uri];
} else {
  require 'views/notfound.view.php';
}

// $f3 = 'fruit3';

// $fruits = [
//   'fruit1' => 'apple',
//   'fruit2' => 'orange',
//   'fruit3' => 'banana',
// ];

// $fruits[$f3];



// if ($uri === '/') {
//   require 'controllers/index.controller.php';
// } else if ($uri === '/about') {
//   require 'controllers/about.controller.php';
// } else if ($uri === '/contact') {
//   require 'controllers/contact.controller.php';
// } else {
//   require 'views/notfound.view.php';
// }

