@extends('app.layouts.app')

@section('head-tag')
<title>أماكن سياحية</title>
@endsection

@section('content')

<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs">
                    <span class="mr-2">
                        <a href="index.html">الرئيسية</a>
                    </span>
                     <span>أماكن</span>
                </p>
                <h1 class="mb-3 bread">أماكن سياحية</h1>
            </div>
        </div>
    </div>
</div>



<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <?php foreach(paginate($ads,6) as $advertise) { ?>
            <div class="col-sm col-md-6 col-lg-3 ftco-animate">
                <div class="properties shadow">
                    <a href="<?= route('home.ads',[$advertise->id]) ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= asset($advertise->image) ?>');">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <h3><a href="<?= route('home.ads',[$advertise->id]) ?>" class="text-primary"><?= $advertise->title ?></a></h3>
                        <span class="light-font">
                            <?= substr(html_entity_decode($advertise->description), 0, 219).'...' ?>
                            <a href="<?= route('home.ads',[$advertise->id]) ?>" class="text-orange font-size-small-subtitle">اقرأ أكثر</a>
                        </span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <?= paginateView($ads,6); ?>
    </div>
</section>




@endsection
