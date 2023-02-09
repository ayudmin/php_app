<?php

$config = require base_path('config.php');

$db = new Databse($config['database']);

$heading = "My Notes";

$notes = $db->query('select * from notes where user_id = 1')->get();

require base_path('views/notes/index.view.php');


