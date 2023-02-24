<?php
use Core\Database;
use Core\App;

$heading = "Edit Note";
$errors = [];
$db = App::resolve(Database::class);
$currentUser = 1;

$note = $db->query('select * from notes where  id = :id', [
        'id'=> $_GET['id']
])->findOrFail();
authorize($note['user_id'] === $currentUser);
view('notes/edit.view.php', [
    'heading' => $heading,
    'errors' => $errors,
    'note' => $note
]);
