<!DOCTYPE html>
<html lang="en">

<head>
    <title>cart</title>
    @include('user.layouts.style')
</head>

<body class="goto-here">
@include('user.layouts.navbar')
<!-- END nav -->

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                        <tr class="text-center">
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>Product name</th>
                            <th>Price</th>
                            <th>Meal quantitiy</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $row)
                        <tr class="text-center">
                            <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

                            <td class="image-prod">
                                <div class="img"
                                     style="background-image:url({{ asset('/') }}/ProductImage/{{ $row->image }});">Meal</div>
                            </td>

                            <td class="product-name">
                                <h3>{{ $row->name }}</h3>
                            </td>

                            <td class="price">৳{{ $row->price }}</td>

                            <td class="quantity">
                                <div class="input-group mb-3">
                                    <input type="text" name="quantity"
                                           class="quantity form-control input-number" value="1" min="1" max="100">
                                </div>
                            </td>

                            <td class="total">৳{{ $row->price }}</td>
                        </tr><!-- END TR-->
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="row justify-content-end">

            <div class="col-lg-6 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Provide your address</h3>
                    <form action="#" class="info">

                        <div class="form-group">
                            <label for="country">Address:</label>
                            <input type="text" class="form-control text-left px-3" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="country">Zip/Postal Code</label>
                            <input type="text" class="form-control text-left px-3" placeholder="">
                        </div>
                    </form>
                </div>
                <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Save</a></p>
            </div>
            <div class="col-lg-6 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>
                    <p class="d-flex">
                        <span>Subtotal</span>
                        <span>৳20.60</span>
                    </p>
                    <p class="d-flex">
                        <span>Delivery</span>
                        <span>৳0.00</span>
                    </p>
                    <p class="d-flex">
                        <span>Discount</span>
                        <span>৳3.00</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <span>৳17.60</span>
                    </p>
                </div>
                <p><a href="{{ route('checkout.show') }}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
            </div>
        </div>
    </div>
</section>

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
