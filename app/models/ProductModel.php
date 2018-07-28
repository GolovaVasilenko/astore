<?php

namespace app\models;


use astore\App;

class ProductModel extends AppModel
{
    const TABLE = "products";

    public $title;

    public $slug;

    public $description;

    public $excerpt;

    public $brand_id;

    public $meta_title;

    public $meta_desc;

    public $h1;

    public $active;

    public $hit;

    public $recommended;

    public $position;

    protected $categories = [];

    protected $brand;
    

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

    public function getCategories()
    {

    }

    public function __get($key)
    {
        if(property_exists($this, $key))
            $db = App::$app->getProperty('db');
            switch($key){
                case 'categories':
                    $query = "SELECT * FROM " . $key . " AS cat 
                              JOIN categories_products AS cp ON cat.id = cp.categories_id 
                              JOIN products AS p ON cp.products_id = p.id 
                              WHERE p.id = :id";
                    $result = $db->query($query, CategoryModel::class, ['id' => $this->id]);
                    break;
                case 'brands':
                    $query = "SELECT * FROM " . $key . " AS b WHERE b.id = :id";
                    $result = $db->query($query, BrandModel::class, ['id' => $this->brand_id]);
                    break;
                default:
                    parent::__get($key);
                    break;
            }
            $this->$key = \R::find($key, 'WHERE product_id = ?', $this->id);
        return $this->$key;
    }

    public static function countProduct()
    {
        return \R::count(self::TABLE);
    }
}