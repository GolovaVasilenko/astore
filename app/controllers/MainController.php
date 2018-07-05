<?php

namespace app\controllers;

use astore\App;

class MainController extends AppController
{
    public function indexAction()
    {
        $this->setMeta(App::$app->getProperty("site_name"),"escription", "home keywords...");
        $this->set(['name' => 'Alexey']);
    }
}