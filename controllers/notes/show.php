<?php

$config = require base_path('config.php');

$db = new Databse($config['database']);

$heading = "Note";
$currentUser = 1;

$note = $db->query('select * from notes where  id = :id', [
    'id'=> $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUser);

require base_path('views/notes/show.view.php');


