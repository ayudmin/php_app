<?php

$config = require('config.php');

$db = new Databse($config['database']);

$heading = "Note";

$note = $db->query('select * from notes where user_id = :user and id = :id', [
    'user' => 4,
    'id'=> $_GET['id']
])->fetch();

require 'views/note.view.php';


