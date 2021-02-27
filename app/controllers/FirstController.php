<?php 

namespace App\Controllers;

class FirstController extends BaseController {

    
    public function home($request , $response, $args)
    {
        // $data = $request->getQueryParams(); // GET data parameter ?parameter=value
        // $data = $request->getParsedBody(); //Get data from POST
        $response->getBody()->write($this->container->my_service);
        $response->getBody()->write($this->container['settings']['db']['user']);
        $data = [
            ['name' => 'Adam' , 'id' => 1],
            ['name' => 'Pedro' , 'id' => 2]

        ];
        $response = $this->container->view->render($response , 'view.phtml' , ['name' => $args['name'] , 'data' => $data]);
        return $response;
    }
}