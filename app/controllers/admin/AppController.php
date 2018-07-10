<?php


namespace app\controllers\admin;


use app\models\AppModel;
use app\models\UserModel;
use astore\base\AbstractController;

class AppController extends AbstractController
{
    public $layout = 'admin';

    public function __construct($route)
    {
        parent::__construct($route);

        if(!UserModel::isAdmin() && $route['action'] != 'login-admin'){
            $this->redirect(ADMIN . 'user/login-admin');
        }
        new AppModel();
    }
}