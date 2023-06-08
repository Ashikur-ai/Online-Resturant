<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/animate.css">

    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/aos.css">

    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/jquery.timepicker.css">


    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/icomoon.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/style.css">

</head>
<body class="goto-here">
<!-- END nav -->
@if(Session()->has('message'))
    <div class="alert text-center alert-success">
        {{ Session()->get('message') }}
    </div>
@endif


<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-6 mb-5 ">
            <a href="{{ asset('/') }}/ProductImage/{{ $data->image }}" class="image-popup"><img src="{{ asset('/') }}/ProductImage/{{ $data->image }}" class="img-fluid" alt="Colorlib Template"></a>
        </div>
        <div class="col-lg-6 product-details pl-md-5 ">
            <h3>{{ $data->name }}</h3>
            <div class="rating d-flex">
                <p class="text-left mr-4">
                    <a href="#" class="mr-2">5.0</a>
                    <a href="#"><span class=""><img src="./assets/img/star.png" alt=""></span></a>
                    <a href="#"><span class=""><img src="./assets/img/star.png" alt=""></span></a>
                    <a href="#"><span class=""><img src="./assets/img/star.png" alt=""></span></a>
                    <a href="#"><span class=""><img src="./assets/img/star.png" alt=""></span></a>
                    <a href="#"><span class=""><img src="./assets/img/star.png" alt=""></span></a>

                </p>
                <p class="text-left mr-4">
                    <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
                </p>
                <p class="text-left">
                    <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
                </p>
            </div>
            <p class="price"><span>৳{{ $data->price }}</span></p>
            <p>{{ $data->description }}</p>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="form-group d-flex">

                    </div>
                </div>
                <div class="w-100"></div>

                <div class="w-100"></div>
                <div class="col-md-12">
                    <p style="color: #000;">{{ $data->amount }} pieces available</p>
                </div>
            </div>
            <p><a href="{{ route('orderProduct.now', $data->id) }}" class="btn btn-black py-3 px-5"><button class="alert-success">Buy Now</button></a></p>
        </div>
    </div>
</div>
</section>




@include('user.layouts.footer')


<!-- loader -->


<script src="{{ asset('/') }}/assets/js/jquery.min.js"></script>
<script src="{{ asset('/') }}/assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{ asset('/') }}/assets/js/popper.min.js"></script>
<script src="{{ asset('/') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}/assets/js/jquery.easing.1.3.js"></script>
<script src="{{ asset('/') }}/assets/js/jquery.waypoints.min.js"></script>
<script src="{{ asset('/') }}/assets/js/jquery.stellar.min.js"></script>
<script src="{{ asset('/') }}/assets/js/owl.carousel.min.js"></script>
<script src="{{ asset('/') }}/assets/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('/') }}/assets/js/aos.js"></script>
<script src="{{ asset('/') }}/assets/js/jquery.animateNumber.min.js"></script>
<script src="{{ asset('/') }}/assets/js/bootstrap-datepicker.js"></script>
<script src="{{ asset('/') }}/assets/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('/') }}/assets/js/google-map.js"></script>
<script src="{{ asset('/') }}/assets/js/main.js"></script>


<script>
    $(document).ready(function(){

        var quantitiy=0;
        $('.quantity-right-plus').click(function(e){

            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            $('#quantity').val(quantity + 1);


            // Increment

        });

        $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            // Increment
            if(quantity>0){
                $('#quantity').val(quantity - 1);
            }
        });

    });
</script>

</body>
</html>
