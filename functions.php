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

function authorize($conditon)
{
	if(! $conditon){
		abort(Response::FORBIDDEN);
	}
}


