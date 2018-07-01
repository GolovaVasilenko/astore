<?php

namespace app\controllers;

use app\models\AppModel;
use astore\base\AbstractController;

class AppController extends AbstractController
{
    public function __construct($route)
    {
        parent::__construct($route);

        new AppModel();
    }
}