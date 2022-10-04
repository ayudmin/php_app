<?php 

$books = [

	[
		"name" => "Biology",
		"category" => "Science",
		"yearReleased" => "2000",
		"purchaseUrl" => "http.example.com"

	],

	[
		"name" => "History",
		"category" => "Arts",
		"yearReleased" => "1902",
		"purchaseUrl" => "http.example.com"

	],

	[
		"name" => "Mathematics",
		"category" => "Science",
		"yearReleased" => "1902",
		"purchaseUrl" => "http.example.com"

	],

]; 	


$filteredbooks = array_filter($books, function ($book) {

	return $book['category'] === 'Arts';

});


require 'index.view.php';


