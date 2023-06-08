<!DOCTYPE html>
<html lang="en">

<head>
    <title>Meal page</title>
    @include('user.layouts.style')
</head>

<body class="goto-here">
@include('user.layouts.navbar')
@if(Session()->has('message'))
    <div class="text-center alert alert-success">
        {{ Session()->get('message') }}
    </div>
    @endif


<!-- END nav -->
<!-- banner -->
<div class="hero-wrap hero-bread" style="background-image: url('./assets/img/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Choose your meal for the day</h1>
            </div>
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
                <a href="{{ route('orderMeal.now', $row->id) }}" class="btn btn-primary offset-10 mt-3"> Order now</a>
            </div>
        @endforeach


    </div>
</div>

@include('user.layouts.footer')


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
    </svg></div>


@include('user.layouts.script')

<script>
    $(document).ready(function () {

        var quantitiy = 0;
        $('.quantity-right-plus').click(function (e) {

            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            $('#quantity').val(quantity + 1);


            // Increment

        });

        $('.quantity-left-minus').click(function (e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            // Increment
            if (quantity > 0) {
                $('#quantity').val(quantity - 1);
            }
        });

    });
</script>

</body>

</html>
