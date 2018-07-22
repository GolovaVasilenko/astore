<?php


namespace app\controllers\admin;

use app\models\CategoryModel;
use astore\Session;


class CategoryController extends AppController
{
    public function indexAction()
    {
        $this->setMeta('Страница - Список Категорий');
    }

    public function deleteAction()
    {
        $errors = '';
    	$id = $this->getRequestID();

    	if(CategoryModel::hasChildren($id) || CategoryModel::hasProduct($id)){
    		$errors .= "Удаление не возможно категория имеет вложенные категории или продукты.";
            Session::set('errors', $errors);
            $this->redirect(ADMIN . 'category');
    	}

    	CategoryModel::remove($id);
        Session::set('success', 'Категория успешно удалена!');
        $this->redirect(ADMIN . 'category');
    }
}