<?php

namespace app\controllers\admin;


use app\models\ProductModel;
use astore\libs\Pagination;
use astore\Request;

class ProductController extends AppController
{
    public function indexAction()
    {
        $page = Request::getItem('page', 1);
        $perpage = 10;
        $count = ProductModel::countProduct();
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();

        $products = ProductModel::getAllProducts($start, $perpage);

        debug($products);

        $this->set(['products' => $products, 'count' => $count]);
        $this->setMeta('Список продуктов магазина');
    }
}