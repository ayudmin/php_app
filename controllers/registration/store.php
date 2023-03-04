<?php
use Core\Validator;
use Core\App;
use Core\Database;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (! Validator::email($email)){
    $errors['email'] = 'Please provide a valid email';
}
if (! Validator::string($password, 7, 255)){
    $errors['password'] = 'Please provide a valid password';
}
if(! empty($errors)){
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}
$db = App::resolve(Database::class);
$result = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if($user){
    header('location: /');
    exit();
} else {
    $db->query("INSERT INTO users(email, password) VALUES(:email, :password)", [
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ]);
    $_SESSION['user'] = [
        'email' => $email
    ];
    header('location: /');
    exit();
}
