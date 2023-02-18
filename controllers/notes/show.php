<?php

use Core\Database;

$db = App::container()->resolve(Database::class);
$currentUser = 1;
$heading = "Note";

$note = $db->query('select * from notes where  id = :id', [
        'id'=> $_GET['id']
])->findOrFail();
authorize($note['user_id'] === $currentUser);
view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);

