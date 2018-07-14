<?php


namespace app\controllers\admin;


class CategoryController extends AppController
{
    public function indexAction()
    {
        $this->setMeta('Страница - Список Категорий');
    }
}