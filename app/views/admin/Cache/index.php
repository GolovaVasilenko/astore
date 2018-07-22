<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Управление кешем
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Список Категорий</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Список кешируемых ресурсов</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                <thead>
                                <tr role="row">
                                    <th>Название</th>
                                    <th>Описание</th>
                                    <th>Время кеширования</th>
                                    <th>Действие</th>

                                </thead>
                                <tbody>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">Кеш Категорий</td>
                                    <td>Кеш витжета меню на сайте</td>
                                    <td>1ч</td>
                                    <td>
                                        <a class="delete" href="<?=ADMIN;?>/cache/delete?key=category">
                                            <i class="fa fa-fw fa-close text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_2">Кеш Фильтров</td>
                                    <td>Кеш витжета фильтров и групп фильтров на сайте</td>
                                    <td>1ч</td>
                                    <td>
                                        <a class="delete" href="<?=ADMIN;?>/cache/delete?key=filters">
                                            <i class="fa fa-fw fa-close text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table></div></div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
