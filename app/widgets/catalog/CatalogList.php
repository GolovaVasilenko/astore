<?php

namespace app\widgets\catalog;


use astore\App;
use astore\Cache;

class CatalogList
{
    protected $data;

    protected $tree;

    protected $menuHtml;

    protected $tpl = '';

    protected $container = 'ul';

    protected $table = 'categories';

    protected $cacheTime = 3600;

    protected $cacheKey = 'catalog_list';

    protected $attrs = [];

    protected $prepend = '';

    public function __construct($options = [])
    {
        $this->tpl = __DIR__ . '/tpl/menu_tpl.php';
        $this->getOptions($options);
    }

    protected function getOptions($options)
    {
        foreach($options as $key => $value){
            if(property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    protected function run()
    {
        $this->menuHtml = Cache::get($this->cacheKey);
        if(!$this->menuHtml) {
            $this->getData();
        }
        $this->output();
    }

    protected function output() {
        echo $this->menuHtml;
    }

    protected function getData()
    {
        $data = [];
        $data = App::$app->getProperty('cat');
        if(!$data)
            $data = Cache::get('cars');
        $this->data = $data;
    }

}