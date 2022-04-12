@extends('admin.layouts.page');

@section('head-tag')
<title>تسجيل حساب</title>
<link rel="stylesheet" href="<?= asset('admin-assets/css-rtl/pages/authentication.css') ?>">
@endsection


@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper mt-0">

<div class="content-header row">
</div>
<div class="content-body">
    <section class="row flexbox-container">
        <div class="col-12 d-flex justify-content-center">
            <div class="card bg-authentication rounded-0 mb-5">
                <div class="row m-0 align-self-center">
                    <div class="col-lg-6 d-none d-lg-block text-center align-self-center pl-0 pr-3 py-0">
                        <img src="admin-assets/images/pages/register.jpg" alt="branding logo">
                    </div>
                    <div class="col-lg-6 col-12 p-0">
                        <div class="card rounded-0 mb-5 p-2">
                            <div class="card-header pt-1 pb-0">
                                <div class="card-title">
                                    <h4 class="mb-0">إنشاء حساب جديد</h4>
                                </div>
                            </div>
                            <p class="px-2">قم بملء البيانات التالية لتسجيل حساب</p>
                          
                            <?php if(errorExists()){ ?>
                            <div class="alert alert-danger">
                                <ul style="list-style-type: none">
                                <?php foreach (allErrors() as $error) { ?>
                                    <li>
                                     <?= $error ?>
                                    </li>
                                  <?php } ?>
                                </ul>
                            </div>
                            <?php } ?>
                        

                            <div class="card-content">
                                <div class="card-body pt-0">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-label-group">
                                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="الاسم الشخصي" required>
                                            <label for="first_name">الاسم الشخصي</label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="اسم العائلة" required>
                                            <label for="last_name">اسم العائلة</label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="البريد الإلكتروني" required>
                                            <label for="email">البريد الإلكتروني</label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="file" name="avatar" id="avatar" class="form-control" required>
                                            <label for="avatar">صورة الملف الشخصي</label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="كلمة سر" required>
                                            <label for="password">كلمة سر</label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="أعد إدخال كلمة السر" required>
                                            <label for="confirm_password">أعد إدخال كلمة السر</label>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <fieldset class="checkbox">
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked>
                                                        <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                        </span>
                                                        <span class="">وافقت على البنود والشروط الخاصة</span>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <a href="" class="btn btn-outline-primary float-left btn-inline mb-50">دخول</a>
                                        <button type="submit" class="btn btn-primary float-right btn-inline mb-50">تسجيل البيانات</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


</div>
<!-- END: Content-->
</div>

@endsection


