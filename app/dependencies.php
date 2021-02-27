<?php 

$container = $app->getContainer();

$view =  new \Slim\Views\PhpRenderer('../app/views/');
$container['view'] = $view;

$container['my_service'] =  function($c){
    return 'My service in action';
};

