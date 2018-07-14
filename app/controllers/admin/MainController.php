<?php

namespace app\controllers\admin;


use app\models\MainModel;

class MainController extends AppController
{
    public function indexAction()
    {
        $this->set(['info' => MainModel::getAllInformation()]);
        $this->setMeta('Панель администратора');
    }
}