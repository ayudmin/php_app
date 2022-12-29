<?php 


require "functions.php";

require "Database.php";

// require "router.php";

$config = require('config.php');

$db = new Databse($config['database']);

$posts = $db->query('select * from posts')->fetchAll();

dd($posts);

