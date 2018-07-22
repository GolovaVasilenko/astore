<?php

namespace app\controllers\admin;


use astore\Cache;
use astore\Session;

class CacheController extends AppController
{
    public function indexAction()
    {
        $this->setMeta('Управление кешем');
    }

    public function deleteAction()
    {
        $key = isset($_GET['key']) ? $_GET['key'] : null;

        switch($key){
            case 'category':
                Cache::remove('catalog_list');
                Cache::remove('admin_select');
                Cache::remove('admin_cat');
                break;
            case 'filters':

                break;
        }

        Session::set('success', 'Выбраный кеш успешно удален');
        $this->redirect(ADMIN . 'cache');
    }
}