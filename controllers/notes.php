<?php

$config = require('config.php');

$db = new Databse($config['database']);

$heading = "My Notes";

$notes = $db->query('select * from notes where user_id = 1')->get();

require 'views/notes.view.php';


