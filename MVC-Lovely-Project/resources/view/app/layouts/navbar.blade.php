<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="direction: rtl;">
    <div class="container">
        <a class="navbar-brand" href="<?= route('home.index') ?>">Irani<span>Price</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> القائمة
      </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?= (currentUrl() == route('home.index')) ? 'active' : '' ?>"><a href="<?= route('home.index') ?>" class="nav-link">الرئيسية</a></li>
                <li class="nav-item <?= (currentUrl() == route('home.all.ads')) ? 'active' : '' ?>"><a href="<?= route('home.all.ads') ?>" class="nav-link">أماكن</a></li>
                <li class="nav-item <?= (currentUrl() == route('home.all.price')) ? 'active' : '' ?>"><a href="<?= route('home.all.price') ?>" class="nav-link">معلومات عن سعر البضائع</a></li>
                <li class="nav-item <?= (currentUrl() == route('home.about')) ? 'active' : '' ?>"><a href="<?= route('home.about') ?>" class="nav-link">التواصل بنا للحجز و الخدمات</a></li>
                <li class="nav-item <?= (currentUrl() == route('home.all.post')) ? 'active' : '' ?>"><a href="<?= route('home.all.post') ?>" class="nav-link">مقالات</a></li>
                <?php if(\System\Auth\Auth::checkLogin()) { ?>
                <?php if(\System\Auth\Auth::user()->user_type == 'admin') { ?>
                    <li class="nav-item btn-success "><a href="<?= route('admin.index') ?>" class="nav-link mx-lg-1 text-white"><span class="icon-plane m-2"></span>پنل ادمین</a></li>
                    <?php } ?>
                    <li class="nav-item btn-primary"><a href="<?= route('home.index') ?>" class="nav-link mx-lg-1"><span class="icon-user m-2"></span> <?= \System\Auth\Auth::user()->first_name . ' ' . \System\Auth\Auth::user()->last_name ?></a></li>
                    <li class="nav-item btn-danger"><a href="<?= route('auth.logout') ?>" class="nav-link mx-lg-1 text-white"><span class="icon-power-off m-2"></span>الخروج</a></li>
                    <?php } else { ?>
                <li class="nav-item cta"><a href="<?= route('auth.login.view') ?>" class="nav-link ml-lg-1 mr-lg-5"><span class="icon-user m-2"></span>الدخول</a></li>
                <li class="nav-item cta cta-colored"><a href="<?= route('auth.register.view') ?>" class="nav-link"><span class="icon-pencil m-2"></span>التسجيل</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

