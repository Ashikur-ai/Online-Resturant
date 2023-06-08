<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="">Tasteful <br> Food Service</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ asset('/home') }}" class="nav-link">Upload Product</a></li>

                <li class="nav-item"><a href="{{ route('uploaded_product.show') }}" class="nav-link">All Products</a></li>
                <li class="nav-item"><a href="{{ route('mealcreate.show') }}" class="nav-link">Create Meal</a></li>
                <li class="nav-item"><a href="{{ route('allMeal.show') }}" class="nav-link">All Meal</a></li>
                <li class="nav-item"><a href="" class="nav-link">Contact</a></li>



                @if(Route::has('login'))
                    @auth

                        <li class="nav-item cta cta-colored"><a href="" class="nav-link">
                                <span>{{ Auth::user()->name }}</span> <img src="./assets/img/user.png" alt="">
                            </a>
                        </li>
                        <li class="nav-item cta cta-colored"><a href="{{ route('logout.show') }}" class="nav-link">
                                <span>Logout</span> <img src="./assets/img/logout.png" alt="">
                            </a>
                        </li>
                    @else


                        <li class="nav-item cta cta-colored"><a href="{{ route('login') }}" class="nav-link">
                                <span>login</span> <img src="./assets/img/login.png" alt="">
                            </a>
                        </li>
                        <li class="nav-item cta cta-colored"><a href="{{ route('register') }}" class="nav-link">
                                <span>Register</span> <img src="./assets/img/register.png" alt="">
                            </a>
                        </li>
                    @endauth
                @endif


            </ul>
        </div>
    </div>
</nav>

