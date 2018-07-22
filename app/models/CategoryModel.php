<?php

namespace app\models;


use astore\Session;

class CategoryModel extends AppModel
{

	const TABLE = 'categories';

    public static function getAllCategories()
    {
        return \R::getAssoc("SELECT * FROM categories");
    }

    public static function hasChildren($id_category)
    {
    	return \R::count(self::TABLE, 'parent_id = ?', [$id_category]);
    }

    public static function hasProduct($id_category)
    {
    	return \R::count('categories_products', 'categories_id = ?', [$id_category]);
    }

    public static function remove($id)
    {
        $category = \R::load(self::TABLE, $id);
        \R::trash($category);
    }
}