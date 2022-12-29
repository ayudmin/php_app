<?php 


require "functions.php";

require "Database.php";

// require "router.php";


$db = new Databse();

$post = $db->query('select * from posts where id = 7');

dd($post);

