<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome to Tasteful Food Service</title>
    @include('user.layouts.style')
</head>

<body class="goto-here">
@include('user.layouts.navbar')
<!-- END nav -->

{{--banner--}}
<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(./assets/img/banner.jpeg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-12 ftco-animate text-center">
                        <h1 class="mb-2">We serve Fresh food</h1>
                        <h2 class="subheading mb-4">We deliver fast</h2>
                        <p><a href="{{ route('meal.show') }}" class="btn btn-primary"> Meal </a></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url(./assets/img/banner3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-sm-12 ftco-animate text-center">
                        <h1 class="mb-2">100% Fresh &amp; Healthy</h1>
                        <h2 class="subheading mb-4">We care about health</h2>
                        <p><a href="{{ route('meal.show') }}" class="btn btn-primary"> Meal </a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                        <span><i class="fa-solid fa-truck"></i></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Instant Delivery</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                        <span><i class="fa-sharp fa-light fa-check-double"></i></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Always Fresh</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                        <span><i class="fa-sharp fa-light fa-check-double"></i></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Superior Quality</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                        <span><i class="fa-solid fa-headset"></i></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Support</h3>
                        <span>Customer Support</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--Top resturant--}}
<section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Top Restaurant</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                     style="background-image: url(./assets/img/restaurant1.jpg);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="#">Restaurant 1</a></h2>
                    </div>
                </div>
                <div class="category-wrap ftco-animate img d-flex align-items-end"
                     style="background-image: url(./assets/img/restaurant2.png);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="#">Restaurant 2</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                     style="background-image: url(./assets/img/mejban.jpg);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="#">Restaurant 3</a></h2>
                    </div>
                </div>
                <div class="category-wrap ftco-animate img d-flex align-items-end"
                     style="background-image: url(./assets/img/restaurant3.webp);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="#">Restaurant 4</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--All product--}}
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Featured Products</span>
                <h2 class="mb-4">Our Products</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($data as $row)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="{{ route('product.detail', $row->id) }}" class="img-prod"><img class="img-fluid" src="{{ asset('/') }}/ProductImage/{{ $row->image }}" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">{{ $row->name }}</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc">৳120.00</span><span class="price-sale">৳{{ $row->price }}</span></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{--Customer feedback--}}

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Customer feedbacks</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(./assets/img/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">I have a great experience with this platform. The products
                                    were very much fresh and hygenic. </p>
                                <p class="name">Jashim Miah</p>
                                <span class="position">General Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr>

@include('user.layouts.footer')


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
    </svg></div>

@include('user.layouts.script')

</body>

</html>
