<?php 

$_SESSION['name'] = 'Ayume';
$heading = "Home";

view('index.view.php', [
    'heading' => $heading
]);


