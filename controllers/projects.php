<?php 
dd($_SESSION['name']);
$heading = "Projects";

view('projects.view.php', [
    'heading' => $heading
]);

