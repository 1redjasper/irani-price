@extends('admin.layouts.page')



@section('head-tag')
    <title>استعادة كلمة السر</title>
    <link rel="stylesheet" type="text/css" href="<?= asset('admin-assets/css-rtl/pages/authentication.css') ?>">
@endsection



@section('content')

    <div class="content-header row">
    </div>
    <div class="content-body">
        <section class="row flexbox-container justify-content-center">
            <div class="col-xl-7 col-md-9 col-10 d-flex justify-content-center px-0">
                <div class="card bg-authentication rounded-0 mb-0">
                    <div class="row m-0">
                        <div class="col-lg-6 d-lg-block d-none text-center align-self-center">
                            <img src="<?= asset('admin-assets/images/pages/forgot-password.png') ?>" alt="branding logo">
                        </div>
                        <div class="col-lg-6 col-12 p-0">
                            <div class="card rounded-0 mb-0 px-2 py-1">
                                <div class="card-header pb-1">
                                    <div class="card-title">
                                        <h4 class="mb-0">استعادة كلمة السر</h4>
                                    </div>
                                </div>
                                <p class="px-2 mb-0">رجاءا أدخل بريدك الإلكتروني. سيتم إرسال بريد إلكتروني إليك يحتوي على رابط لتغيير كلمة المرور الخاصة بك. لاحظ أن الرابط صالح لمدة 10 دقائق فقط.</p>
                                <?php if (errorExists()) {?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php foreach (allErrors() as $error) { ?>
                                        <li><?= $error ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <?php } ?>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="<?= route('auth.forgot') ?>" method="post">
                                            <div class="form-label-group">
                                                <input name="email" type="email" id="email" class="form-control" placeholder="بريد إلكتروني">
                                                <label for="email">Email</label>
                                            </div>

                                            <div class="float-md-left d-block mb-1">
                                                <a href="<?= route('auth.login.view') ?>" class="btn btn-outline-primary btn-block px-75">العودة إلى صفحة تسجيل الدخول</a>
                                            </div>
                                            <div class="float-md-right d-block mb-1">
                                                <button type="submit" class="btn btn-primary btn-block px-75">استعادة كلمة السر</button>
                                            </div>
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

@endsection