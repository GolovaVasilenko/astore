<?php

namespace app\controllers;

use app\models\BrandModel;
use app\models\ProductModel;
use astore\App;

class MainController extends AppController
{
    public function indexAction()
    {
        $brands = BrandModel::all();
        $hitProducts = ProductModel::getHitProducts();

        $this->setMeta(App::$app->getProperty("site_name"),"escription", "home keywords...");
        $this->set(['name' => 'Alexey']);
    }
}