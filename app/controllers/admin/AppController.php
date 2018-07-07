<?php


namespace app\controllers\admin;


use astore\base\AbstractController;

class AppController extends AbstractController
{
    public $layout = 'admin';

    public function __construct($route)
    {
        parent::__construct($route);
    }
}