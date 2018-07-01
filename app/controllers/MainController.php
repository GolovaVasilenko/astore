<?php

namespace app\controllers;

class MainController extends AppController
{
    public function indexAction()
    {
        $this->setMeta(\astore\App::$app->getProperty("site_name"),"escription", "home keywords...");
        $this->set(['name' => 'Alexey']);
    }
}