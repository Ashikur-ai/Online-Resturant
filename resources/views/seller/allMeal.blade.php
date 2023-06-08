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
                <h2 class="mb-4">Your created Meal</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            @foreach($data as $row)
                <div class="col-12 p-4 mt-5 border-bottom">
                    <div class="row">

                        <div class="col-3"><img src="{{ asset('/') }}/MealImage/{{ $row->first_product_image }}" alt="" class="img-thumbnail mealImg "></div>
                        <div class="col-3"><img src="{{ asset('/') }}/MealImage/{{ $row->second_product_image }}" alt="" class="img-fluid mealImg "></div>
                        <div class="col-3"><img src="{{ asset('/') }}/MealImage/{{ $row->third_product_image }}" alt="" class="img-fluid mealImg "></div>
                        <div class="col-3"><img src="{{ asset('/') }}/MealImage/{{ $row->fourth_product_image }}" alt="" class="img-fluid mealImg "></div>
                    </div>
                    <div class="row text-center">
                        <div class="col-3">
                            <h6>{{ $row->first_product }}</h6>
                        </div>
                        <div class="col-3">
                            <h6>{{ $row->second_product }}</h6>
                        </div>
                        <div class="col-3">
                            <h6>{{ $row->third_product }}</h6>
                        </div>
                        <div class="col-3">
                            <h6>{{ $row->fourth_product }}</h6>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary offset-10 mt-3"> Order now</a>
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
