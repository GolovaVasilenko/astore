<?php

namespace app\models;


class CategoryModel extends AppModel
{
    public static function getAllCategories()
    {
        return \R::getAssoc("SELECT * FROM categories");
    }
}