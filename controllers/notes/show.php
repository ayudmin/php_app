<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
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

