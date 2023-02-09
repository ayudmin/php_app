<?php

use Core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);

$heading = "Note";
$currentUser = 1;

$note = $db->query('select * from notes where  id = :id', [
    'id'=> $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUser);

view('notes/show.view.php', [
    'heading' => $heading,
    'note' => $note
]);

