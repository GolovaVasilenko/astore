<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Добавление
        <small>новой категории</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=ADMIN?>/category"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Новая Категория</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Категории товара</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form role="form" method="post" action="<?=ADMIN;?>category/add">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title-cat">Наименование Категории</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="parent-cat">Родительская категория</label>
                                <?php new \app\widgets\catalog\CatalogList([
                                    'tpl' => APP . '/views/admin/Category/select.php',
                                    'container' => 'select',
                                    'cacheKey'  => 'admin_select',
                                    'cacheTime' => 0,
                                    'class'     => 'form-control',
                                    'attrs'     => ['name' => 'parent_id', 'id' => 'parent-cat'],
                                    'prepend'   => '<option value="0">Нет родителя</option>',
                                ])?>
                            </div>
                            <div class="form-group">
                                <label for="cat-slug">URL</label>
                                <input type="text" name="slug" class="form-control slug" id="cat-slug" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="cat-h1">H1</label>
                                <input type="text" name="h1" class="form-control" id="cat-h1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="cat-description">Описание</label>
                                <textarea id="editor1" name="description" class="form-control" id="cat-description" placeholder="">
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="cat-meta-title">META title</label>
                                <input type="text" name="meta_title" class="form-control" id="cat-meta-title" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="cat-meta-desc">META description</label>
                                <textarea name="meta_desc" row="5" class="form-control" id="cat-meta-desc" placeholder="">
                                </textarea>
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Создать</button>
                        </div>
                    </form>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>