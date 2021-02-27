<?php 

namespace App\Controllers;

class HomeController extends BaseController {

    
    public function home($request , $response, $args)
    {
        // $data = $request->getQueryParams(); // GET data parameter ?parameter=value
        // $data = $request->getParsedBody(); //Get data from POST
        $response = $this->container->view->render($response , 'view.phtml');
        return $response;
    }
}