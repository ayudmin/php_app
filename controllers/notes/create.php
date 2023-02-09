<?php

require base_path('Validator.php');

$config = require base_path('config.php');
$db = new Databse($config['database']);

$heading = "Create Note";

if (! Validator::email('done@gmail.com')){
    dd('Not a valid email');
}


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $errors = [];
    if (! Validator::string($_POST['body'], 1 , 1000)) {
        $errors['body'] = 'A body of no more than 1000 characters is required';
    }
    if (empty($errors)){
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}
require base_path('views/notes/create.view.php');

