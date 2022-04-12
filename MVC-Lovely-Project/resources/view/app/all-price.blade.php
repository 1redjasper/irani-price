@extends('app.layouts.app')

@section('head-tag')
<title></title>
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
                     <span>التسوق و الأسعار</span>
                </p>
                <h1 class="mb-3 bread">معلومات عن الشراء و أسعار البضائع المختلفة</h1>
            </div>
        </div>
    </div>
</div>



<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <?php foreach(paginate($objects,6) as $object) { ?>
            <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate p-md-0">
                <div class="properties mb-0 hover-shadow">
                    <div class="card border-warning rounded-0 flex-row flex-md-column w-max-md-100" style="width: 18rem;">
                        <a href="<?= route('home.price',[$object->id]) ?>" class="img d-flex justify-content-center align-items-center background-object" style="background-image: url('<?= asset($object->image) ?>');">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="card-body">
                          <h6 class="card-title mt-0 font-size-extra-small-title">
                            <a href="<?= route('home.price',[$object->id]) ?>" class="text-primary"><?= $object->title ?></a>
                          </h6>
                          <span class="text-muted d-block font-size-extra-small-subtitle">بالتومان : <?= $object->amount.' تومان ' ?></span>
                          <span class="text-muted d-block font-size-extra-small-subtitle">بالدولار ( تقريبي ) : <?= $object->dollar_amount.' دولار أمريكي ' ?></span>
                        </div>
                      </div>
                </div>
            </div>









     















            <?php } ?>
        </div>
        <?= paginateView($objects,6); ?>
    </div>
</section>




@endsection



<div class="col-sm col-md-6 col-lg-3 ftco-animate">
    <div class="properties shadow">
        <a href="<?= route('home.price',[$object->id]) ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= asset($object->image) ?>');">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search2"></span>
            </div>
        </a>
        <div class="text p-3">
            <span class="status <?= $object->sellStatus() == 'موجود' ? 'sale' : 'rent' ?>">
                <?= $object->sellStatus() ?>
            </span>
            <div class="d-flex">
                <div class="one">
                    <h3><a href="<?= route('home.price',[$object->id]) ?>" style="color:royalblue;"><?= $object->title ?></a></h3>
                </div>
                <div class="two">
                    <span style="color: #FFAC00"><?= $object->amount ?></span>
                </div>
            </div>
            <hr/>
            <p><?= substr(html_entity_decode($object->description), 0, 100)  ?></p>
        </div>
    </div>
</div>