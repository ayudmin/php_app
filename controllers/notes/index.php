<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$heading = "My Notes";
$notes = $db->query('select * from notes where user_id = 1')->get();
view('notes/index.view.php', [
    'heading' => $heading,
    'notes' => $notes
]);

