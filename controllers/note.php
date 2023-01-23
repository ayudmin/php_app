<?php

$config = require('config.php');

$db = new Databse($config['database']);

$heading = "Note";
$currentUser = 5;

$note = $db->query('select * from notes where  id = :id', [
    'id'=> $_GET['id']
])->findOrFail();

if ($note['user_id'] != $currentUser){
    abort(Response::FORBIDDEN);
}

require 'views/note.view.php';


