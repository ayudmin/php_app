<?php 

function dd($value)

{
	echo "<pre>";
	var_dump($value);
	echo "</pre>";
	die();
}

function urlIs($value)
{
	require $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404)
{
	http_response_code($code);
	require base_path("views/templates/{$code}.php");
	die();
}

function authorize($conditon)
{
	if(! $conditon){
		abort(Response::FORBIDDEN);
	}
}

function base_path($path)
{
	return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
	extract($attributes);
	require base_path('views/' . $path);
}


