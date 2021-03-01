<?php 

$container = $app->getContainer();

$view =  new \Slim\Views\PhpRenderer('../app/views/' , [
    'baseUrl' => 'http://localhost:8000'
]);
$container['view'] = $view;

$container['my_service'] =  function($c){
    return 'My service in action';
};

