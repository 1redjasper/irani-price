@extends('app.layouts.app')

@section('head-tag')
<title>irani price</title>
@endsection

@section('content')


<section class="home-slider owl-carousel">

    <?php foreach($slides as $slide) {?>
    <div class="slider-item" style="background-image:url('<?= asset($slide->image) ?>');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
                <div class="col-md-6 text p-4 ftco-animate" style="direction: rtl;">
                    <h1 class="mb-2"><?= $slide->title ?></h1>
                    <span class="d-block"><?= substr(html_entity_decode($slide->body),0, 210) ?>...</span>
                    <span class="text-orange d-block mt-2"><?= $slide->amount ?> </span>
                    <a href="<?= $slide->url ?>" class="btn-custom p-3 px-4" style="background-color: #FFAC00"><span class="icon-plus mr-1"></span>معلومات أكثر</a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

</section>

<section class="ftco-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12 search-wrap">
                <h2 class="heading h5 d-flex align-items-center pr-4"><span class="ion-ios-search mr-3"></span>البحث</h2>
                <form action="<?= route('home.search') ?>" class="search-property" method="GET">
                    <div class="row">
                        <div class="col-md align-items-end">
                            <div class="form-group">
                                <label for="#"> ابحث هنا</label>
                                <div class="form-field">
                                    <div class="text-left icon"><span class="icon-pencil "></span></div>
                                    <input type="text" name="search" class="form-control text-right" placeholder="عنوان">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md align-self-end">
                            <div class="form-group">
                                <div class="form-field">
                                    <input type="submit" value="البحث" class="form-control btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-3 d-flex align-self-strech ftco-animate mb-3">
                <div class="media block-6 services py-4 d-block text-center mx-auto">
                    <div class="d-flex justify-content-center">
                        <div class="icon"><span class="flaticon-pin"></span></div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">البحث عن المحافظة الوجهة</h3>
                        <p>يمكنك بسهولة الحصول على معلومات حول المحافظة التي تريدها</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate mb-3">
                <div class="media block-6 services py-4 d-block text-center mx-auto">
                    <div class="d-flex justify-content-center">
                        <div class="icon"><span class="flaticon-detective"></span></div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">التعاقد مع مترجم وقائد جولة</h3>
                        <p>يمكنك التنسيق مع مترجم أو مرشد سياحي لمساعدتك على طول الرحلة</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate mb-3">
                <div class="media block-6 services py-4 d-block text-center mx-auto">
                    <div class="d-flex justify-content-center">
                        <div class="icon"><span class="icon-local_hospital"></span></div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">طاقم علاج محترف</h3>
                        <p>بامكانك زيارة أحسن أطباء بأرخص سعر</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services py-4 d-block text-center mx-auto">
                    <div class="d-flex justify-content-center">
                        <div class="icon"><span class="flaticon-purse"></span></div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">رحلة اقتصادية</h3>
                        <p>في هذه السفرة ، يمكنك تستمتع بترفيه اقتصادي ولكن جميل</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-properties">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">المقالات الأخيرة</span>
                <h2 class="mb-4">المضافة حديثًا</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="properties-slider owl-carousel ftco-animate">
                    <?php foreach($newestAds as $advertise) {?>
                    <div class="item">
                        <div class="properties">
                            <a href="<?= route('home.ads',[$advertise->id]) ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= asset($advertise->image) ?>');">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <h3><a href="<?= route('home.ads',[$advertise->id]) ?>" class="text-royal-blue"><?= $advertise->title ?></a></h3>
                                <span class="light-font">
                                    <?= substr(html_entity_decode($advertise->description), 0, 210).'...' ?>
                                    <a href="<?= route('home.ads',[$advertise->id]) ?>" class="text-orange font-size-small-subtitle">اقرأ أكثر</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">مقترحات خاصة</span>
                <h2 class="mb-4">أشهر الأماكن السياحية</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <?php foreach($bestAds as $advertise) { ?>
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="properties">
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

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <h2 class="mb-4"></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="<?= $postsCount ?>">0</strong>
                                <span>مقالات</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="<?= $adsCount ?>">0</strong>
                                <span>أماكن سياحية</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">مقالات</span>
                <h2>المقالات الحديثة</h2>
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
                                    <div><small class="text-muted"><?= $post->created_at ?><i class="icon icon-calendar ml-1"></i></small></div>
                                    <div><small><a href="<?= route('home.about') ?>" class="text-muted"><?= $post->user()->first_name . ' ' . $post->user()->last_name ?><i class="icon icon-user ml-2"></i></a></small></div>
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

@section('script')
<script>

    $(window).on('load', function(){
        $.ajax({
            url : "<?= route('home.last.posts') ?>",
            success: function(result){
                posts = result;
                var htmlString = '';
                for (var i = 0; i < posts.length; i++){
                    var post = posts[i];
                    htmlString += '<div class="col-md-3 d-flex fadeIn ftco-animated">';
                        htmlString += '<div class="blog-entry align-self-strech">';
                            htmlString += '<a href="'+ post.url +'" class="block-20" style="background-image: url('+ post.image +');">';
                                htmlString += '</a>';
                                htmlString += '<div class="text mt-3 d-block">';
                                    htmlString += '<h3 class="heading mt-3"><a href="'+ post.url +'">'+ post.title +'</a></h3>';
                                    htmlString += '<div class="meta mb-3">';
                                        htmlString += '<div>' + post.created_at + '</div>';
                                        htmlString += '<div>' + post.user + '</div>';
                                    htmlString += '</div>';
                                 htmlString += '</div>';
                            htmlString += '</div>';
                        htmlString += '</div>';
                }
                $('#last_posts').html(htmlString);
            }
        });
    });


</script>
@endsection




<div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate mb-3">
    <div class="media block-6 services py-4 d-block text-center mx-auto">
        <div class="d-flex justify-content-center">
            <div class="icon"><span class="flaticon-house"></span></div>
        </div>
        <div class="media-body p-2 mt-2">
            <h3 class="heading mb-3">حجز فندق أو شقة</h3>
            <p>فئات فنادق و فيلات مختلفة اقتصادية لو فاخرة</p>
        </div>
    </div>
</div>