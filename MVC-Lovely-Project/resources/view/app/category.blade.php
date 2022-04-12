@extends('app.layouts.app')

@section('head-tag')
<title>مدن</title>
@endsection

@section('content')

<div class="hero-wrap" style="background-image: url('<?= asset('images/bg_1.jpg') ?>');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
              <span class="mr-2">
                  <a href="<?= route('home.index') ?>">الرئيسية/</a>
              </span>
              <span>تصنيف/</span>
              <span><?= $category->name ?></span>
           </p>
          <h1 class="mb-3 bread">تصنيفات</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">تصنيفات</span>
                <h2 class="mb-4"><?= $category->name ?></h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <?php foreach($ads as $advertise) { ?>
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
                                <?= substr(html_entity_decode($advertise->description), 0, 210).'...' ?>
                                <a href="<?= route('home.ads',[$advertise->id]) ?>" class="text-orange font-size-small font-size-small-subtitle">اقرأ أكثر</a>
                            </span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        
        </div>
    </div>
</section>


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">مقالات</span>
                <h2><?= $category->name ?></h2>
            </div>
        </div>
        <div class="row d-flex">
            <?php foreach($posts as $post) { ?>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate mr-3 ">
                    <div class="blog-entry align-self-stretch bg-white shadow mx-auto">
                        <div class="card h-100" style="width: 18rem;">
                            <a href="<?= route('home.post',[$post->id]) ?>" class="block-20" style="background-image: url('<?= asset($post->image) ?>');">
                            </a>
                            <div class="card-body">
                              <h5 class="card-title heading mt-3"><a class="text-body" href="<?= route('home.post',[$post->id]) ?>"><?= $post->title ?></a></h5>
                              <div class="meta mb-3 mx-auto">
                                <div><a href="#"><?= $post->created_at ?></a></div>
                                <div><a href="<?= route('home.about') ?>" class="text-dark"><?= $post->user()->first_name . ' ' . $post->user()->last_name ?></a></div>
                            </div>
                            </div>
                          </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</section>




@endsection
