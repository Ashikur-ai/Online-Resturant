<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to HATBAZAR.com</title>
    @include('user.layouts.style')
</head>
<body class="goto-here">
@include('seller.layouts.navbar')
<!-- END nav -->

{{--slider --}}

{{--keypoint section--}}
{{--category section--}}


{{--Our product section--}}

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Fresh Products</span>
                <h2 class="mb-4">Your uploaded Products</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            @foreach($data as $row)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('/') }}/ProductImage/{{ $row->image }}" alt="Colorlib Template">
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
<hr>

@include('user.layouts.footer')


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


@include('user.layouts.script')

</body>
</html>
