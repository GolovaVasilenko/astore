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

        if(Session::get('user')){
            $this->redirect(PATH);
        }
        $this->setMeta('Регистрация', 'Регистрация нового пользователя');
    }

    public function loginAction()
    {
        if(!empty($_POST)){
            $data = $_POST;
            $user = UserModel::getAuthUser($data);

            if($user){
                if($user->role === 'admin'){
                    $this->redirect(ADMIN);
                }
                else {
                    Session::set('success', 'Вы успешно авторизованы');
                    $this->redirect(PATH);
                }
            }
            else {
                Session::set('errors', 'Данные авторизации введены неверно');
                $this->redirect('/user/login');
            }
        }

        if(Session::get('user')){
            $this->redirect(PATH);
        }
        $this->setMeta('Авторизация пользователя');
    }

    public function logoutAction()
    {
        Session::remove('user');
        $this->redirect(PATH);
    }
}