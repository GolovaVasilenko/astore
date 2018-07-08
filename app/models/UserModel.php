<?php

namespace app\models;


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
}