<?php

namespace app\models;


use astore\Session;

class UserModel extends AppModel
{
    const TABLE = 'users';

    public $attributes = [
        'name'     => '',
        'email'    => '',
        'password' => '',
        'phone'    => '',
        'address'  => '',
        'role'     => 'user'
    ];

    public $rules = [
        'required' => [
            ['email'],
            ['password']
        ],
        'email' => [
            ['email']
        ],
        'lengthMin' => [
            ['password', 6]
        ]
    ];

    public function checkUnique()
    {
        $user = \R::find(self::TABLE, 'WHERE email = ?', [ $this->attributes['email'] ]);

        if($user){
            $this->errors['unique'][] = "Данный e-mail адрес уже зарегистрирован в системе";
            return false;
        }
        return true;
    }

    public static function getAuthUser($data)
    {
        $user = \R::findOne(static::TABLE, 'WHERE email = ?', [$data['email']]);

        if($user){
            if(password_verify($data['password'], $user->password)){
                Session::set('user', serialize($user));
                return $user;
            }
        }
        return false;
    }

    public static function isAuth()
    {
        return Session::get('user') ? true : false;
    }

    public static function isAdmin()
    {
        if(self::isAuth()){
            $user = unserialize(Session::get('user'));
            if($user->role === 'admin'){
                return true;
            }
        }
        return false;
    }
}