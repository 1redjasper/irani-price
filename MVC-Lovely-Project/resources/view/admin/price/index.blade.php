@extends('admin.layouts.app')


@section('head-tag')
    <title>ادمین / قيمت هاي كالاها</title>
@endsection



@section('content')
    <div class="content-header row">
    </div>

    <div class="content-body">
        <!-- Zero configuration table -->
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">قيمت هاي كالاها</h4>
                            <span><a href="<?= route("admin.price.create") ?>" class="btn btn-success">ایجاد</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="">
                                    <table class="table zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>عنوان</th>
                                            <th>تصویر</th>
                                            <th>السعر بالتومان</th>
                                            <th>کاربر</th>
                                            <th style="width: 22rem;">تنظیمات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($objects as $object) { ?>
                                        <tr>
                                            <td><?= $object->id ?></td>
                                            <td><?= $object->title ?></td>
                                            <td><img style="width: 90px;" src="<?= asset($object->image) ?>" alt=""></td>
                                            <td><?= $object->amount ?></td>
                                            <td><?= $object->user()->first_name . ' ' . $object->user()->last_name ?></td>
                                            <td style="width: 22rem;">
                                                <a href="<?= route('admin.price.gallery', ['id' => $object->id]) ?>" class="btn btn-warning">تصاوير</a>
                                                <a href="<?= route('admin.price.edit', ['id' => $object->id]) ?>" class="btn btn-info">ویرایش</a>
                                                <form class="d-inline" action="<?= route('admin.price.delete', ['id' => $object->id]) ?>" method="post">
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button type="submit" class="btn btn-danger">حذف</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Zero configuration table -->
    </div>

@endsection