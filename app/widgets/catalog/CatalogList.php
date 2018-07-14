<?php

namespace app\widgets\catalog;


use astore\App;
use astore\Cache;
use app\models\CategoryModel;

class CatalogList
{
    protected $data;

    protected $tree;

    protected $menuHtml;

    protected $tpl = '';

    protected $container = 'ul';

    protected $class = 'menu-catalog';

    protected $table = 'categories';

    protected $cacheTime = 0;

    protected $cacheKey = 'catalog_list';

    protected $attrs = [];

    protected $prepend = '';

    public function __construct($options = [])
    {
        $this->tpl = __DIR__ . '/tpl/menu_tpl.php';
        $this->getOptions($options);
        $this->run();
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
            $this->tree = $this->getTree();
            $this->menuHtml = $this->getMenuHtml($this->tree);

            if($this->cacheTime){
                Cache::set($this->cacheKey, $this->menuHtml, $this->cacheTime);
            }
        }
        $this->output();
    }

    protected function output() {
        $attrs = '';

        if(!empty($this->attrs)){
            foreach ($this->attrs as $k => $v){
                $attrs .= ' ' . $k . '="' . $v . '"';
            }
        }

        echo "<{$this->container} class={$this->class} {$attrs}>";
            echo $this->prepend;
            echo $this->menuHtml;
        echo "</{$this->container}>";
    }

    protected function getTree()
    {
        $tree = [];
        $data = $this->data;
        foreach($data as $id => &$node){
            if(!$node['parent_id']){
                $tree[$id] = &$node;
            }else{
                $tree[$node['parent_id']]['children'][$id] = $node;
            }
        }
        return $tree;
    }

    protected function getMenuHtml($tree, $tab = '')
    {
        $str = '';
        foreach($tree as $id => $category) {
            $str .= $this->catToTemplate($category, $tab, $id);
        }

        return $str;
    }

    protected function catToTemplate($category, $tab, $id)
    {
        ob_start();
        require $this->tpl;
        return ob_get_clean();
    }

    protected function getData()
    {
        $this->data = App::$app->getProperty('cats');
        if(!$this->data)
            $this->data = CategoryModel::getAllCategories();;
    }

}