@extends('app.layouts.app')

@section('title')
<title>مقالات</title>
@endsection

@section('content')

<div class="hero-wrap" style="background-image: url('<?= asset('images/bg_1.jpg') ?>');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">الرئيسية</a></span> <span>مقالات</span></p>
          <h1 class="mb-3 bread">مقالات</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section bg-light">
      <div class="container">
          <div class="row d-flex">
              <?php foreach (paginate($posts, 6) as $post) { ?>


              <div class="col-sm col-md-6 col-lg-3 ftco-animate">
                <div class="properties shadow">
                    <a href="<?= route('home.post',[$post->id]) ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= asset($post->image) ?>');">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text-b p-3">
                        <div>
                          <h5 class="card-title heading mt-3"><a class="text-body" href="<?= route('home.post',[$post->id]) ?>"><?= $post->title ?></a></h5>
                          <hr/>
                          <div class="meta mb-3 mx-auto">
                            <span><a href="#" class="text-dark"><?= $post->user()->first_name . ' ' . $post->user()->last_name ?></a></span>
                            <span><a href="#"><?= $post->created_at ?></a></span>
                        </div>
                        </div>

                    </div>
                </div>
            </div>


        <?php } ?>
      </div>
      <?= paginateView($posts, 6) ?>
      </div>
  </section>
      
@endsection