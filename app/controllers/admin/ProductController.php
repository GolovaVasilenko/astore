<?php

namespace app\controllers\admin;


use app\models\ProductModel;
use astore\Request;

class ProductController extends AppController
{
    public function indexAction()
    {
        $page = Request::getItem('page', 1);
        $perpage = 10;
        $count = ProductModel::countProduct();

    }
}