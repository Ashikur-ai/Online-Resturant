<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ asset('/') }}">Tasteful <br> Food Service</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ asset('/') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('restaurant.show') }}" class="nav-link">Restaurants</a></li>
                <li class="nav-item"><a href="{{ route('meal.show') }}" class="nav-link">Get Meals</a></li>
                <li class="nav-item"><a href="{{ route('about.show') }}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ route('contact.show') }}" class="nav-link">Contact</a></li>
                <li class="nav-item cta cta-colored"><a href="{{ route('cart.show') }}" class="nav-link">Cart<span><i
                                class="fa-solid fa-cart-shopping"></i></span>[0]</a></li>




                @if(Route::has('login'))
                    @auth

                        <li class="nav-item"><a href="{{ route('week.payment') }}" class="nav-link">Weekly <br>payment</a></li>
                        <li class="nav-item"><a href="{{ route('mart.show') }}" class="nav-link">Mart</a></li>


                        <li class="nav-item cta cta-colored"><a href="{{ route('logout') }}" class="nav-link">
                                <span>Logout</span> <img src="{{ asset('/') }}/assets/img/logout.png" alt="">
                            </a>
                        </li>



                        <li class="nav-item cta cta-colored"><a href="" class="nav-link">
                                <span>{{ Auth::user()->name }}</span> <img src="{{ asset('/') }}/assets/img/user.png" alt="">
                            </a>
                        </li>

                    @else


                        <li class="nav-item cta cta-colored"><a href="{{ route('login') }}" class="nav-link">
                                <span>login</span> <img src="{{ asset('/') }}/assets/img/login.png" alt="">
                            </a>
                        </li>
                        <li class="nav-item cta cta-colored"><a href="{{ route('register') }}" class="nav-link">
                                <span>Register</span> <img src="{{ asset('/') }}/assets/img/register.png" alt="">
                            </a>
                        </li>
                    @endauth
                @endif

            </ul>
        </div>
    </div>
</nav>
