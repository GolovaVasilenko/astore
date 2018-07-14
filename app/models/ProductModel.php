<?php

namespace app\models;


class ProductModel extends AppModel
{
    const TABLE = "products";
    

    public static function getHitProducts()
    {
        return \R::find(self::TABLE, "WHERE hit = 1 AND active = 1");
    }

    public function __get($key)
    {
        if(!isset($this->relations[$key]))
            $this->relations[$key] = \R::find($key, 'WHERE product_id = ?', $this->attributes['id']);
        return $this->relations[$key];
    }
}