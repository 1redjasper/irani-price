@extends('app.layouts.app')

@section('head-tag')
<title>السياحة</title>
@endsection

@section('content')


<div class="hero-wrap" style="background-image: url('<?= asset('images/bg_1.jpg') ?>');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <span>  الرئيسية / </span>
                    <span>  المعالم / </span>
                    <span><?= $advertise->title ?></span>
                </p>
                <h1 class="mb-3 bread">السياحة</h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="single-slider owl-carousel">
                            <div class="item">
                                <div class="properties-img" style="background-image: url('<?= asset($advertise->image) ?>');"></div>
                            </div>
                            <?php foreach($galleries as $gallery) { ?>
                            <div class="item">
                                <div class="properties-img" style="background-image: url('<?= asset($gallery->image) ?>');"></div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate" style="direction: rtl">
                        <h2><?= $advertise->title ?></h2>
                        <p class="rate mb-4">
                            <span class="loc"><a href="#"><i class="icon-map"></i> <?= $advertise->address ?></a></span>
                        </p>
                        <div class="d-md-flex mt-5 mb-5">
                            <ul style="list-style: none">
                                <li><span class="icon-home text-primary"> نوع : </span> <?= $advertise->type() ?></li>
                                <li><span class="icon-local_parking text-primary"> موقف سيارات : </span> <?= ($advertise->parking==0)?'غير موجود':'موجود' ?></li>
                                <li><span class="icon-dollar text-primary"> السعر : </span> <?= $advertise->amount ?></li>
                            </ul>
                            <ul class="ml-md-5">
                            </ul>
                        </div>
                        <p><?= html_entity_decode($advertise->description) ?></p>
                    </div>


                    <div class="col-md-12 properties-single ftco-animate mb-5 mt-5">
                        <h4 class="mb-4">أماكن اخرى في هذه المدينة</h4>
                        <div class="row">
                            <?php foreach($relatedAds as $advertise) { ?>
                                <div class="col-sm col-md-6 ftco-animate">
                                    <div class="properties shadow">
                                        <a href="<?= route('home.ads',[$advertise->id]) ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= asset($advertise->image) ?>');">
                                            <div class="icon d-flex justify-content-center align-items-center">
                                                <span class="icon-search2"></span>
                                            </div>
                                        </a>
                                        <div class="text p-3">
                                            <h3><a href="<?= route('home.ads',[$advertise->id]) ?>" class="text-primary"><?= $advertise->title ?></a></h3>
                                            <span class="light-font">
                                                <?= substr(html_entity_decode($advertise->description), 0, 210).'...' ?>
                                                <a href="<?= route('home.ads',[$advertise->id]) ?>" class="text-orange font-size-small font-size-small-subtitle">اقرأ أكثر</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
            <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">

                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>التصنيفات</h3>
                        <?php foreach($categories as $category) { ?>
                        <li>
                            <a href="<?= route('home.category', [$category->id]) ?>">
                                <?= $category->name ?>
                            </a>
                        </li>
                        <?php } ?>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>المقالات الحديثة</h3>
                    <?php foreach($posts as $post) { ?>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url('<?= asset($post->image) ?>');" href="<?= route('home.post',[$post->id]) ?>"></a>
                        <div class="text">
                            <h3 class="heading"><a href="<?= route('home.post',[$post->id]) ?>"><?= $post->title ?></a></h3>
                            <div class="meta">
                                <div><a href="#"><?= $post->created_at ?><span class="icon-calendar"></span></a></div>
                                <div><a href="#"> <?= $post->user()->first_name . ' ' . $post->user()->last_name ?><span class="icon-person"></span></a></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .section -->

@endsection
