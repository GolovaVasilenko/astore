<?php

namespace app\controllers;

use app\models\AppModel;
use app\models\CategoryModel;
use astore\App;
use astore\base\AbstractController;
use astore\Cache;

class AppController extends AbstractController
{
    public function __construct($route)
    {
        parent::__construct($route);

        new AppModel();
        App::$app->setProperty('cats', self::cacheCategory());
    }

    public static function cacheCategory()
    {
        $cats = Cache::get('cats');
        if(!$cats) {
            $cats = CategoryModel::getAllCategories();
            Cache::set('cats', $cats);
        }

        return $cats;
    }
}