<!doctype html>
<html lang="en">
<head>

    <title>Seller Dashboard</title>
    @include('seller.layouts.style')
</head>
<body>
@include('seller.layouts.navbar')
@if(session()->has('message'))
    <div class="alert text-center alert-success">
        {{ session()->get('message') }}

    </div>

@endif


<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <img src="./assets/img/food.jpg" alt="" style="width: 500px; height: 600px;">
            </div>
            <div class="col-md-6 py-5 wrap-about pb-md-5 ftco-animate">
                <div class="heading-section-bold mb-4 mt-md-5">
                    <div class="ml-md-0">
                        <h2 class="mb-4">Upload your product</h2>
                    </div>
                </div>
                <div class="">
                    <form action="{{ route('product.upload') }}" method="post" enctype="multipart/form-data" class="bg-white p-5 contact-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Product Name">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="rating" placeholder="Enter product's rating">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="price" placeholder="Enter product's price">
                        </div>
                        <div class="form-group">
                            <textarea name="description" id="" cols="30" rows="7" class="form-control" placeholder="Enter product's description"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="amount" placeholder="Enter product's amount">
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Product's Image</label>
                            <input type="file" required="" class="form-control" name="file" placeholder="Drag your picture">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Upload Product" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </div>
</section>



@include('user.layouts.footer')
@include('seller.layouts.script')
</body>
</html>
