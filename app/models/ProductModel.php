<?php

namespace app\models;


class ProductModel extends AppModel
{
    const TABLE = "products";

    public static function getHitProducts()
    {
        return \R::find(self::TABLE, "WHERE hit = 1 AND active = 1");
    }
}