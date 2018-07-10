<?php

namespace app\controllers\admin;


use app\models\UserModel;
use astore\Session;

class UserController extends AppController
{
    public function loginAdminAction()
    {
        $this->layout = 'login-admin';

        if(!empty($_POST)){
            $data = $_POST;
            $user = new UserModel();

            if($user->getAuthUser($data)){
                if(UserModel::isAdmin()){
                    $this->redirect(ADMIN);
                }
            }
            Session::set('errors', 'Невернвй логин или пароль');
        }

        $this->setMeta('Авторизация менаджера');
    }
}