<?php

use App\Controllers\HomeController;
use App\Controllers\CategoryController;


$app->get('/' , HomeController::class.':home');
$app->get('/delete-category/{id}' , CategoryController::class.':deleteCategory');
$app->get('/show-category/{id}' , CategoryController::class.':showCategory');
// $app->get('/hello/{name}', HomeController::class.':home');
// $app->post('/hello/{name}' , HomeController::class.':home');