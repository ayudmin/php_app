<?php

$router->get('/', 'controllers/index.php');
$router->get('/projects', 'controllers/projects.php');
$router->get('/reports', 'controllers/reports.php');

$router->get('/notes', 'controllers/notes/index.php')->only('auth');
$router->get('/note', 'controllers/notes/show.php');
$router->get('/notes/create', 'controllers/notes/create.php');
$router->get('/note/edit', 'controllers/notes/edit.php');

$router->patch('/note', 'controllers/notes/update.php');
$router->post('/notes', 'controllers/notes/store.php');
$router->delete('/note', 'controllers/notes/destroy.php');
$router->delete('/note', 'controllers/notes/destroy.php');


$router->get('/register', 'controllers/registration/create.php')->only('guest');
$router->post('/register', 'controllers/registration/store.php');