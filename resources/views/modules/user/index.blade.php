@extends('layouts.app')

@section('content')
    {{-- <div class="col-md-12"> --}}
    {{-- @include('layouts.headers.cards') --}}

    <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <img src="https://dpjye2wk9gi5z.cloudfront.net/wcsstore/AuroraESite/Attachment/2021/septiembre/LP-principal-puma-the-art-of-sport-dpstreet-230921.jpg"
                        alt="" width="100%" height="100%" fill="#777">
                    <div class="container">
                    </div>
                </div>
                <div class="carousel-item">

                    <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/HP_MH_1920x800-NJ-051019_tcm221-362745.jpg"
                        alt="" width="100%" height="100%" fill="#777">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>NITE JOGGER FOR ALL</h1>
                            <p>Light up the night in new Nite Jogger colorways. Photo by Cole Younger.</p>
                            <p><a class="btn btn-lg btn-light" href="#" role="button">SHOP NOW <i
                                        class="fa fa-arrow-right"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://brand.assets.adidas.com/f_auto,q_auto,fl_lossy/capi/enGB/Images/new-styles-added-hp-masthead-desktop_143-363097.jpg"
                        alt="" width="100%" height="100%" fill="#777">

                    <div class="carousel-caption text-left">
                        <h1 class="add2_text">NEW STYLES ADDED - 33% OFF</h1>
                        <p class="add2_text">Keep celebrating 70 years of adidas. Enjoy 33% off today and Show Your
                            Stripes!
                        </p>
                        <p><a class="btn btn-lg btn-dark" href="#" role="button">SHOP NOW <i
                                    class="fa fa-arrow-right"></i></a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.prismic.io/sportsshoesprod/9fd1909b-0a67-4259-b7de-2803aa2bada1_Nike-vaporfly-pink-desktop+%E2%80%93+ES.jpg?auto=compress,format"
                        alt="" width="100%" height="100%" fill="#777">

                    <div class="container">
                        <div class="carousel-caption text-left">
                            <p><a class="btn btn-lg btn-light" href="#" role="button"
                                    style="margin-bottom: 130px">SHOP NOW <i class="fa fa-arrow-right"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-xl-8 mb-5 mb-xl-0">
            <div class="row">
                <div class="col-md-6 col-xs-12 col-sm-12">
                    <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/MOVED_OVER_tcm221-363900.jpg"
                        width="700px" height="500px"jlkn>

                    <div class="container">
                        <div class="carousel-caption">
                            <h2>ULTRABOOST 19</h2>
                            <p>Reboosted</p>
                            <p><a class="btn btn-lg btn-light" href="#" role="button">SHOP NOW <i
                                        class="fa fa-arrow-right"></i></a></p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-xs-12 col-sm-12">
                    <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/originals-fw19-hoc-drop1-tease-hp-teaser-large-2up-ee5790-m-t_v2_tcm221-364940.jpg"
                        width="700px" height="500px">

                    <div class="container">
                        <div class="carousel-caption"">
                            <h2>HOME OF CLASSICS</h2>

                            <p><a class="btn btn-lg btn-light" href="#" role="button">PREVIEW NOW <i
                                        class="fa fa-arrow-right"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="feature_cat">CATEGORIES</h2><br>
                    <div class="row">
                        <div class="col-lg-3 col-xs-6 col-sm-6">
                            <img src="https://liscanopower.com/wp-content/uploads/2023/02/4DDA40ED-D42B-47E6-B439-945D4814E208.jpeg"
                                width="280" height="380" class="img_feature">
                            <div class="container">
                                <div class="carousel-caption">
                                    <i class="text-black"></i> Nike</h2>
                                    </h2>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6 col-sm-6">
                            <img src="https://cdn.shopify.com/s/files/1/0615/0533/9449/products/thumbnail_664A8BC5-97C5-4F8D-8AA7-98991B53F3AE.jpg?v=1661116718"
                                width="280" height="380" class="img_feature">
                            <div class="container">
                                <div class="carousel-caption">
                                    <i class="text-black"></i> Polo</h2>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6 col-sm-6">
                            <img src="https://img01.ztat.net/article/spp-media-p1/e534599bfea04a6b8d9eb5d9f35181c0/b09cf8067684476db30b8371c571012d.jpg?imwidth=1800"
                                width="280" height="380" class="img_feature">
                            <div class="container">
                                <div class="carousel-caption">
                                    <i class="text-black"></i> Lacoste</h2>
                                    </h2>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6 col-sm-6">
                            <img src="https://s3.us-east-1.amazonaws.com/contenido.ipos/fotos/1796/producto/97f14162064b4edab59eabd59d6500ea_24102022032507.jpeg"
                                width="280" height="380" class="img_feature">
                            <div class="container">
                                <div class="carousel-caption">
                                    <i class="text-black"></i>Gucci </h2>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <br>
        {{-- ======================= end of FEATURED CATEGORIES ==================== --}}
        {{-- ======================= start of addias 2 ==================== --}}
        <div class="row mt-5">
            <div class="col-md-6 col-xs-12 col-sm-12">
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enGB/Images/teaser-c-Adidas_Swim_Amphi-mobile_background_image_tcm143-341615.jpg"
                    width="700px" height="500px" style="margin-left: 50px">
                <div class="container">
                    <div class="carousel-caption">
                        <i class="text-black"></i>MAXIMUM</h2>
                        <p>Three support levels, for any activity in and around the water.</p>
                        <p><a class="btn btn-lg btn-dark" href="#" role="button">SHOP NOW <i
                                    class="fa fa-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-12">
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enGB/Images/HP_Teaser_Tights_Small_tcm143-315446.jpg"
                    width="700px" height="500px">
                <div class="container">
                    <div class="carousel-caption"">
                        <i class="text-black"></i> WORK IT OUTSIDE</h2>
                        <p>Get inspired to bootcamp equipment-free in high support tights.</p>

                        <p><a class="btn btn-lg btn-dark" href="#" role="button">PREVIEW NOW <i
                                    class="fa fa-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
        {{-- ======================= start of caro2 ==================== --}}
        <div class="carousel-inner">
            <div class="carousel-item active">


            </div>

        </div>
    </div>{{--  container end --}}

    <hr class="featurette-divider">

    <div class="row featurette">
        <img src="https://www.adidas.co/on/demandware.static/-/Sites-adidas-CO-Library/es_CO/dw5e39c384/static-pages/1366x600_guayosdorados.jpg"
            alt="" width="100%" height="100%" fill="#777">
        <div class="container">
            <div class="carousel-caption text-left" style="margin-bottom: 140px;">
                <h1>UNLOCK AGILITY</h1>
                <p>New Nemeziz 19 is exclusively available through adidas and selected retailers.</p>
                <p><a class="btn btn-lg btn-dark" href="#" role="button">EXCLUSIVELY HERE <i
                            class="fa fa-arrow-right"></i></a></p>
                <p><a class="btn btn-lg btn-dark" href="#" role="button">EXPLORE <i
                            class="fa fa-arrow-right"></i></a></p>
            </div>
        </div>
    </div>

    <br><br>

    <!-- /END THE FEATURETTES -->

    </div>
    </div>
    @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
