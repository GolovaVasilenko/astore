<?php

namespace app\controllers;


use app\models\UserModel;
use astore\Session;

class UserController extends AppController
{
    public function registerAction()
    {
        if(!empty($_POST)){

            $user = new UserModel();
            $data = $_POST;
            $user->load($data);

            if(!$user->validate($data) || !$user->checkUnique()){
                Session::set('old', $data);
                $user->getErrors();
            }
            else {
                $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
                if($user->save(UserModel::TABLE)){
                    Session::set('success', 'Вы успешно прошли регистрацию');
                }
                else {
                    Session::set('errors', 'Произошла ошибка при сохранении!');
                }
            }
            $this->redirect('/user/register');
        }
    }

    public function loginAction()
    {

    }

    public function logoutAction()
    {

    }
}