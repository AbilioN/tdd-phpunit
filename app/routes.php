<?php

use App\Controllers\FirstController;

$app->get('/' , function(){
    return 'Hello Slim';
});

$app->get('/hello/{name}', FirstController::class.':home');