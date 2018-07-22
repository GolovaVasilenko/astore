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

    public function addAction()
    {
        if(!empty($_POST)){
            $model = new CategoryModel();
            $data = $_POST;
            $model->load($data);

            if(!$model->validate($data)){
                $model->getErrors();
                Session::set('old', $data);
                $this->redirect(ADMIN . 'category/add');
            }

            if(CategoryModel::checkSlugUniq($model->attributes['slug'])){
                Session::set('errors', 'URL должен быть уникальным');
                $this->redirect(ADMIN . 'category/add');
            }

            $model->save($model::TABLE);
            Session::set('success', 'Категория успешно создана');
            $this->redirect(ADMIN . 'category/add');
        }
        $this->setMeta("Добавление новой Категории");
    }
}