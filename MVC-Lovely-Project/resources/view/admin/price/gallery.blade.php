@extends('admin.layouts.app')


@section('head-tag')
    <title>ادمین | تصاوير</title>
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
                                    <h4 class="card-title">كالا - تصوير</h4>
                                    <span><a href="<?= route('admin.price.index') ?>" class="btn btn-success">بازگشت</a></span>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">

                                        <form class="row" action="<?= route('admin.price.store.gallery.image', [$object->id]) ?>" method="post" enctype="multipart/form-data">

                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="image">تصویر</label>
                                                    <input name="image" type="file" id="image" class="form-control-file <?= errorClass('image') ?>">
                                                    <?= errorText('image') ?>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-12">
                                                <section class="form-group">
                                                    <button type="submit" class="btn btn-primary">آپلود تصویر</button>
                                                </section>
                                            </div>
                                        </form>
                                        <div class="col-md-12 mt-4 pt-4">
                                            <div class="row">
                                                <?php foreach($pictures as $picture){ ?>
                                                    <div class="col-md-3 text-center">
                                                        <div>
                                                            <img style="width: 100%;" src="<?= asset($picture->image) ?>" alt="">
                                                        </div>
                                                        <a class="btn btn-danger mt-1" href="<?= route('admin.price.delete.gallery.image', [$picture->id]) ?>">حذف</a>
                                                    </div>
                                                    <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            @endsection
