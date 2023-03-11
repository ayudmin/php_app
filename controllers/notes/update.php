<?php

use Core\Database;
use Core\App;
use Core\Validator;

$heading = "Update Note";
$errors = [];
$db = App::resolve(Database::class);
$currentUser = $_SESSION['user'];

$note = $db->query('select * from notes where  id = :id', [
        'id'=> $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $currentUser);
if (! Validator::string($_POST['body'], 1 , 1000)) {
    $errors['body'] = 'A body of no more than 1000 characters is required';
}

if (count($errors)){
    return view('notes/edit.view.php', [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query('update notes set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body']
]);

header('location: /notes');
die();

