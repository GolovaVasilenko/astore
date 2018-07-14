<?php

namespace app\models;


class MainModel extends AppModel
{
    public static function getAllInformation()
    {
        $info = [];
        $info['countNewOrders'] = \R::count('orders', "status = 'new'");
        $info['countUsers'] = \R::count('users');
        $info['countProducts'] = \R::count('products');
        $info['countCategories'] = \R::count('categories');

        return $info;
    }
}