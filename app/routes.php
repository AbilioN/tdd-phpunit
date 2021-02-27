<?php

use App\Controllers\HomeController;

$app->get('/' , HomeController::class.':home');

// $app->get('/hello/{name}', HomeController::class.':home');
// $app->post('/hello/{name}' , HomeController::class.':home');