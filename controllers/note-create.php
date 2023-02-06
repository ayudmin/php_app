<?php

$config = require('config.php');
$db = new Databse($config['database']);

$heading = "Create Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $errors = [];
    if (strlen($_POST['body']) === 0) {
        $errors['body'] = 'A body text is required';
    }
    if (strlen($_POST['body']) > 1000) {
        $errors['body'] = 'The body can not be more than 1000 characters.';
    }
    if (empty($errors)){
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}
require 'views/note-create.view.php';

