<?php
use Core\Validator;

$heading = "Create Note";
$errors = [];

if (! Validator::email('done@gmail.com')){
    dd('Not a valid email');
}

view('notes/create.view.php', [
    'heading' => $heading,
    'errors' => $errors
]);
