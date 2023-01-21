<?php

$config = require('config.php');

$db = new Databse($config['database']);

$heading = "Note";

$note = $db->query('select * from notes where  id = :id', [
    'id'=> $_GET['id']
])->fetch();

if(! $note){
    abort();
}

if ($note['user_id'] != 4){
    abort(403);
}

require 'views/note.view.php';


