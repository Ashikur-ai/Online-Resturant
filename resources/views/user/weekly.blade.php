<!DOCTYPE html>
<html lang="en">

<head>
    <title>contact</title>
    @include('user.layouts.style')
</head>

<body class="goto-here">
@include('user.layouts.navbar')
<!-- END nav -->

<div class="hero-wrap hero-bread" style="background-image: url('./assets/img/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>weekly payment</span></p>
                <h1 class="mb-0 bread">Register for weekly payment</h1>
            </div>
        </div>
    </div>
</div>

<section>
    <h1 class="text-center heading py-5">Register for weekly payment</h1>
    <p class="text-center">You must fillup this section to continue</p>
    <div class="container my-5">
        <div class="row justify-content-center">
            <form class="col-md-8">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter full name">
                </div>
                <div class="form-group">
                    <label for="Id">Student Id</label>
                    <input type="text" class="form-control" required id="Id" placeholder="Enter your id number">
                </div>
                <div class="form-group">
                    <label for="Nid">Nid photocopy</label>
                    <input type="file" required class="form-control-file" id="Nid">
                </div>
                <div class="form-group">
                    <label for="stId">Student id photocopy</label>
                    <input type="file" required class="form-control-file" id="stId">
                </div>
                <div class="form-check">
                    <input type="checkbox" required class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I agree with the terms and conditions</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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
</body>

</html>
