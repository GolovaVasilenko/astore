<?php

namespace app\models;

use astore\base\AbstractModel;

class AppModel extends AbstractModel
{
    const TABLE = '';

    /**
     * @return array
     */
    public static function all()
    {
        return \R::findAll(static::TABLE);
    }

    /**
     * @param $id
     * @return array
     */
    public static function findById($id)
    {
        return \R::findOne(static::TABLE, 'WHERE id = ?', [ $id ]);
    }

    /**
     * @param $column
     * @param $value
     * @return array
     */
    public static function findByColumn($column, $value)
    {
        return \R::find(static::TABLE, 'WHERE ' . $column . ' = ?', [ $value ]);
    }

    /**
     * @param $field
     * @param $value
     * @return array
     */
    public static function search($field, $value)
    {
        return \R::find(static::TABLE, $field . ' LIKE ?', [ $value ]);
    }

    public static function checkSlugUniq($slug)
    {
        return self::findByColumn('slug', $slug);
    }
}