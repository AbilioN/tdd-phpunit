<?php 

namespace App\Controllers;

class FirstController {
    public function home($request , $response, $args)
    {
        $view =  new \Slim\Views\PhpRenderer('../app/views/');
        $response = $view->render($response , 'view.phtml' , ['name' => $args['name']]);
        return $response;
    }
}