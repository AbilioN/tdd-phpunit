<?php
namespace App\Controllers;

use App\Controllers\BaseController;


class CategoryController extends BaseController
{



    public function deleteCategory($request, $response, $args)
    {

        $categoryId = $args['id'];
        // TODO : delete category from database
        $response = $this->container->view->render($response , 'view.phtml' , ['category_deleted' => true]);
        return $response;



    }

    public function showCategory($request , $response , $args)
    {
        $categoryId = $args['id'];
        // TODO : get category from database
        $category = 'Eletronics';
        $response = $this->container->view->render($response, 'view.phtml' , ['category' => $category]);
        return $response;

    }
}
