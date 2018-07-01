<?php

namespace app\controllers;

use astore\App;
use astore\Cache;

class MainController extends AppController
{
    public function indexAction()
    {
        $pages = \R::findAll('page');

        Cache::set('pages', $pages);

        $this->setMeta(App::$app->getProperty("site_name"),"escription", "home keywords...");
        $this->set(['name' => 'Alexey', 'pages' => $pages]);
    }
}