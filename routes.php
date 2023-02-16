<?php

$router->get('/', 'controllers/index.php');
$router->get('/projects', 'controllers/projects.php');
$router->get('/reports', 'controllers/reports.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note', 'controllers/notes/destroy.php');
$router->get('/notes/create', 'controllers/notes/create.php');
$router->post('/notes', 'controllers/notes/store.php');
$router->delete('/note', 'controllers/notes/destroy.php');

