@extends('admin.layouts.app')


@section('head-tag')
    <title>ادمین / آگهی</title>
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
                            <h4 class="card-title">ویرایش</h4>
                            <span><a href="<?= route("admin.price.index") ?>" class="btn btn-success">بازگشت</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <form class="row" action="<?= route("admin.price.update",[$object->id]) ?>" method="post" enctype="multipart/form-data">

                                    <input type="hidden" name="_method" value="put">
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="title">عنوان</label>
                                            <input value="<?= oldOrValue('title', $object->title) ?>" name="title" type="text" id="title" class="form-control <?= errorClass('title') ?>" placeholder="عنوان ...">
                                            <?= errorText('title') ?>
                                        </fieldset>
                                    </div>



                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="image">تصویر</label>
                                            <input name="image" type="file" id="image" class="form-control-file <?= errorClass('image') ?>">
                                            <?= errorText('image') ?>
                                        </fieldset>
                                    </div>




                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="amount">قيمت به تومان</label>
                                            <input value="<?= oldOrValue('amount', $object->amount) ?>" name="amount" type="text" id="amount" class="form-control <?= errorClass('amount') ?>" placeholder="قيمت به تومان ...">
                                            <?= errorText('amount') ?>
                                        </fieldset>
                                    </div>




                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="dollar_amount">قيمت به دولار</label>
                                            <input value="<?= oldOrValue('dollar_amount', $object->dollar_amount) ?>" name="dollar_amount" type="text" id="dollar_amount" class="form-control <?= errorClass('dollar_amount') ?>" placeholder="قيمت به دولار ...">
                                            <?= errorText('dollar_amount') ?>
                                        </fieldset>
                                    </div>



                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="tag">تگ</label>
                                            <input value="<?= oldOrValue('tag', $object->tag) ?>" name="tag" type="text" id="tag" class="form-control <?= errorClass('tag') ?>" placeholder="تگ ...">
                                            <?= errorText('tag') ?>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-12">
                                        <section class="form-group">
                                            <label for="description">متن</label>
                                            <textarea class="form-control <?= errorClass('description') ?>" id="description" rows="5" name="description" placeholder="متن ..."><?= oldOrValue('description', $object->description) ?></textarea>
                                            <?= errorText('description') ?>
                                        </section>
                                    </div>




                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="form-group">
                                                <label for="sell_status">نوع كالا</label>
                                                <select name="sell_status" class="select2 form-control <?= errorClass('sell_status') ?>">
                                                    <option value="0"  <?= oldOrValue('sell_status', $object->sell_status) == 0 ? 'selected' : '' ?>>موجود</option>
                                                    <option value="1"  <?= oldOrValue('sell_status', $object->sell_status) == 0 ? 'selected' : '' ?>>غير موجود</option>
                                                </select>
                                                <?= errorText('sell_status') ?>
                                            </div>
                                        </fieldset>
                                    </div>


                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <div class="form-group">
                                                <label for="type">نوع كالا</label>
                                                <select name="type" class="select2 form-control <?= errorClass('type') ?>">
                                                    <option value="0" <?= oldOrValue('type', $object->type) == 0 ? 'selected' : '' ?>>الاكل والشرب</option>
                                                    <option value="1" <?= oldOrValue('type', $object->type) == 1 ? 'selected' : '' ?>>الأزياء والملابس</option>
                                                    <option value="2" <?= oldOrValue('type', $object->type) == 2 ? 'selected' : '' ?>>الأغراض المنزلية</option>
                                                    <option value="3" <?= oldOrValue('type', $object->type) == 3 ? 'selected' : '' ?>>الجمال والصحة</option>
                                                </select>
                                                <?= errorText('type') ?>
                                            </div>
                                        </fieldset>
                                    </div>


                     

                                    <div class="col-md-6">
                                        <section class="form-group">
                                            <button type="submit" class="btn btn-primary">ویرایش</button>
                                        </section>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('script')
    <script src="<?= asset('ckeditor/ckeditor.js'); ?>"></script>
    <script type="text/javascript">
        CKEDITOR.replace( 'description' );
    </script>
@endsection
