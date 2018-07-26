<?php

namespace app\models;


class ProductModel extends AppModel
{
    const TABLE = "products";
    

    public static function getHitProducts()
    {
        return \R::find(self::TABLE, "WHERE hit = 1 AND active = 1");
    }

    public static function getAllProducts($start = 0, $perpage = 10)
    {
        return \R::getAll(
            "SELECT products.*, categories.title AS cat_title FROM products 
                JOIN categories_products AS cp ON cp.products_id = products.id 
                JOIN categories ON categories.id = cp.categories_id   
                LIMIT {$start}, {$perpage}");
    }

    public function __get($key)
    {
        if(!isset($this->relations[$key]))
            $this->relations[$key] = \R::find($key, 'WHERE product_id = ?', $this->attributes['id']);
        return $this->relations[$key];
    }

    public static function countProduct()
    {
        return \R::count(self::TABLE);
    }
}