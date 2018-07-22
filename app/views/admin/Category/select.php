<?php $parent_id = \astore\App::$app->getProperty('parent_id');?>
<option value="<?=$id;?>" <?php if($id == $parent_id):?>selected<?php endif; if(isset($_GET['id'])&& $id == $_GET['id']): ?>disabled<?php endif;?>  >
    <?=$tab . " " . $category['title'];?>
</option>
<?php if(isset($category['children'])):?>
    <?=$this->getMenuHtml($category['children'], '&nbsp;' . $tab . '-');?>

<?php endif;?>