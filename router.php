<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [

	'/' => 'controllers/index.php',
	'/projects' => 'controllers/projects.php',
	'/notes' => 'controllers/notes.php',
	'/note' => 'controllers/note.php',
	'/reports' => 'controllers/reports.php',

];

function routeTocontroller ($uri, $routes)
{
	if (array_key_exists($uri, $routes))
	{
		require $routes[$uri];
	} else {
		abort();
	}
}

function abort($code = 404)
{
	http_response_code($code);
	require "views/templates/{$code}.php";
	die();
}

routeTocontroller($uri, $routes);

