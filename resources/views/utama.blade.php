@extends('base_user', ["home" => true])

@section('konten')
    <div id="carousel-home" data-ride="carousel" class="carousel slide carousel-fullscreen carousel-fade">
        <!-- Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-home" data-slide-to="1"></li>
            <li data-target="#carousel-home" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides-->
        <div role="listbox" class="carousel-inner">
            <div style="background-image: url('/assets/img/carousel3.jpg');" class="item active">
            <div class="overlay"></div>
            <div class="carousel-caption">
                <h1 class="super-heading">Ketahuilah Artikel Terkait Penyakit</h1>
                <p class="super-paragraph">Lihat artikel yang berkaitan dengan penyakit yang terkait.</p>
            </div>
            </div>
            <div style="background-image: url('/assets/img/carousel2.jpg');" class="item">
            <div class="overlay"></div>
            <div class="carousel-caption">
                <h1 class="super-heading">Keakuratan Sudah Teruji</h1>
                <p class="super-paragraph">Keakuratan artikel penyakit sudah teruji oleh narasumber dokter terkait.</p>
            </div>
            </div>
            <div style="background-image: url('/assets/img/carousel1.jpg');" class="item">
            <div class="overlay"></div>
            <div class="carousel-caption">
                <h1 class="super-heading">Tinggalkan Feedback</h1>
                <p class="super-paragraph">Tinggalkan feedback sebagai saran atau kritik untuk membuat website ini lebih baik lagi dari sebelumnya.</p>
            </div>
            </div>
        </div>
    </div>
    
    <section class="background-gray-lightest negative-margin">
        <div class="container">
            <h1> Mauris placerat eleifend leo.</h1>
            <p class="lead">Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat.</p>
            <p> <a href="text.html" class="btn btn-ghost">Continue reading   </a></p>
        </div>
    </section>
    <section class="section--padding-bottom-small">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="post">
                    <div class="image"><a href="text.html"><img src="assets/img/blog4.jpg" alt="" class="img-responsive"></a></div>
                    <h3><a href="text.html">Rit eget tincidunt condimentum</a></h3>
                    <p class="post__intro">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    <p class="read-more"><a href="text.html" class="btn btn-ghost">Continue reading   </a></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="post">
                    <div class="image"><a href="text.html"><img src="assets/img/blog5.jpg" alt="" class="img-responsive"></a></div>
                    <h3><a href="text.html">Tempor sit amet</a></h3>
                    <p class="post__intro"> Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p>
                    <p class="read-more"><a href="text.html" class="btn btn-ghost">Continue reading   </a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="post">
                    <div class="image"><a href="text.html"><img src="assets/img/blog1.jpg" alt="" class="img-responsive"></a></div>
                    <h3><a href="text.html">Rit eget tincidunt condimentum</a></h3>
                    <p class="post__intro">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    <p class="read-more"><a href="text.html" class="btn btn-ghost">Continue reading     </a></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="post">
                    <div class="image"><a href="text.html"><img src="assets/img/blog2.jpg" alt="" class="img-responsive"></a></div>
                    <h3><a href="text.html">Tempor sit amet</a></h3>
                    <p class="post__intro"> Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p>
                    <p class="read-more"><a href="text.html" class="btn btn-ghost">Continue reading     </a></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="post">
                    <div class="image"><a href="text.html"><img src="assets/img/blog3.jpg" alt="" class="img-responsive"></a></div>
                    <h3><a href="text.html">Vestibulum erat wisi</a></h3>
                    <p class="post__intro">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    <p class="read-more"><a href="text.html" class="btn btn-ghost">Continue reading     </a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--   *** SERVICES ***-->
    <section class="background-gray-lightest">
    <div class="container clearfix">
        <div class="row services">
        <div class="col-md-12">
            <h2>Services</h2>
            <p class="lead margin-bottom--medium"> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
            <div class="row">
            <div class="col-sm-4">
                <div class="box box-services">
                <div class="icon"><i class="pe-7s-alarm"></i></div>
                <h4 class="services-heading">Webdesign</h4>
                <p>Fifth abundantly made Give sixth hath. Cattle creature i be don't them.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box box-services">
                <div class="icon"><i class="pe-7s-cloud"></i></div>
                <h4 class="services-heading">Print</h4>
                <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box box-services">
                <div class="icon"><i class="pe-7s-coffee"></i></div>
                <h4 class="services-heading">SEO and SEM</h4>
                <p>Am terminated it excellence invitation projection as. She graceful shy. </p>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="box box-services">
                <div class="icon"><i class="pe-7s-monitor"></i></div>
                <h4 class="services-heading">Consulting</h4>
                <p>Fifth abundantly made Give sixth hath. Cattle creature i be don't them.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box box-services">
                <div class="icon"><i class="pe-7s-signal"></i></div>
                <h4 class="services-heading">Email Marketing</h4>
                <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box box-services">
                <div class="icon"><i class="pe-7s-id"></i></div>
                <h4 class="services-heading">UX &amp; UI</h4>
                <p>Am terminated it excellence invitation projection as. She graceful shy. </p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!--   *** SERVICES END ***-->
    <!-- portfolio-->
    <section id="portfolio" class="section--no-padding-bottom">
    <div class="container">
        <div class="row">
        <div class="col-md-12 text-center">
            <h1>Gallery or portfolio</h1>
            <p class="lead margin-bottom--big">You can make also a portfolio or image gallery.</p>
        </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row no-space">
        <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="assets/img/portfolio-1.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 1"><img src="assets/img/portfolio-1.jpg" alt="" class="img-responsive"></a></div>
        </div>
        <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="assets/img/portfolio-2.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 2"><img src="assets/img/portfolio-2.jpg" alt="" class="img-responsive"></a></div>
        </div>
        <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="assets/img/portfolio-3.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 3"><img src="assets/img/portfolio-3.jpg" alt="" class="img-responsive"></a></div>
        </div>
        <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="assets/img/portfolio-4.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 4"><img src="assets/img/portfolio-4.jpg" alt="" class="img-responsive"></a></div>
        </div>
        <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="assets/img/portfolio-5.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 5"><img src="assets/img/portfolio-5.jpg" alt="" class="img-responsive"></a></div>
        </div>
        <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="assets/img/portfolio-6.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 6"><img src="assets/img/portfolio-6.jpg" alt="" class="img-responsive"></a></div>
        </div>
        <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="assets/img/portfolio-7.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 7"><img src="assets/img/portfolio-7.jpg" alt="" class="img-responsive"></a></div>
        </div>
        <div class="col-lg-3 col-sm-4 col-xs-6">
            <div class="box"><a href="assets/img/portfolio-8.jpg" title="" data-lightbox="portfolio" data-title="Portfolio image 8"><img src="assets/img/portfolio-8.jpg" alt="" class="img-responsive"></a></div>
        </div>
        </div>
    </div>
    </section>
@endsection