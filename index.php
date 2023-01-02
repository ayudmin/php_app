<?php 


require "functions.php";

require "Database.php";

// require "router.php";

$config = require('config.php');

$db = new Databse($config['database']);

$id = $_GET['id'];

$query = "select * from posts where id = ? ";

$posts = $db->query($query, [$id])->fetch();

dd($posts);

