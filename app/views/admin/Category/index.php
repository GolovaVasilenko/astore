<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Список Категорий
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Список Категорий</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Категории товара</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                <?php new \app\widgets\catalog\CatalogList([
                    'tpl' => APP . '/widgets/catalog/tpl/admin_cat.php',
                    'container' => 'div',
                    'cacheKey' => 'admin_cat',
                    'cacheTime' => 0,
                    'class' => 'list-group list-group-root well',
                ])?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>