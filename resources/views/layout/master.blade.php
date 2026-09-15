<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dhap All Store - eCommerce</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/all_store_bd.png') }}">

    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700,800',
                    'Segoe+Script:300,400,500,600,700,800', 'Lato:300,400,500,600,700,800'
                ]
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = "{{ asset('assets/js/webfont.js') }}";
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo40.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">

    <style>
        .btn.icon-magnifier {
            background-color: #7B0405;
            border: 1px solid #7B0405;
            color: white;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                <div class="container-fluid">
                    <div class="header-left top-notice d-none d-md-flex p-0 font2">
                        <h5 class="d-inline-block text-dark mb-0 ls-0">Refer to a friend and Get <b>10% OFF</b></h5>
                        <a href="{{ url('/demo40-shop') }}" class="category text-white ls-0">START SHARING</a>
                        <small>* Limited time only.</small>
                    </div>

                    <div class="header-right header-dropdowns ml-auto w-sm-100 justify-content-end">
                        <div class="info-box info-box-icon-left p-0">
                            <i class="icon-shipping"></i>
                            <div class="info-box-content">
                                <h4>FREE Express Shipping On Orders ৳99+</h4>
                            </div>
                        </div>

                        <div class="separator"></div>

                        <div class="header-dropdown font2">
                            <a href="#">BDT</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="header-dropdown mr-0 pl-2 font2">
                            <a href="#"><i class="flag-bd flag"></i>BN</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a></li>
                                    <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="separator"></div>

                        <div class="info-box-container align-items-center">
                            <div class="info-box info-box-icon-left">
                                <i class="icon-pin"></i>
                                <div class="info-box-content">
                                    <h4>Our Stores</h4>
                                </div>
                            </div>

                            <div class="info-box info-box-icon-left">
                                <i class="icon-shipping-truck"></i>
                                <div class="info-box-content">
                                    <h4 class="ls-0">Track Your Order</h4>
                                </div>
                            </div>

                            <div class="info-box info-box-icon-left">
                                <i class="icon-help-circle"></i>
                                <div class="info-box-content">
                                    <h4>Help</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
                <div class="container-fluid">
                    <div class="header-left justify-content-lg-left">
                        <button class="mobile-menu-toggler text-primary mr-2" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="{{ url('/') }}" class="logo">
                            <img src="{{ asset('assets/images/all_store_bd.png') }}" class="w-100" width="111" height="44" alt="All Store BD Logo">
                        </a>
                    </div>

                    <div class="header-right w-lg-max">
                        <div class="header-icon header-search header-search-inline header-search-category d-sm-block d-none w-lg-max text-right mt-0">
                            <a href="#" class="search-toggle" role="button" style="border: 2px solid #7B0405;"><i class="icon-magnifier" style="color: #7B0405;"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper mr-1">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Categories</option>
                                            <option value="4">Fashion</option>
                                            <option value="5">Electronics</option>
                                            <option value="7">Home &amp; Garden</option>
                                        </select>
                                    </div>
                                    <button class="btn icon-magnifier p-0" title="search" type="submit" style="border: 1px solid #7B0405; background-color: #7B0405; color: white;"></button>
                                </div>
                            </form>
                        </div>

                        <div class="header-contact header-wishlist d-lg-flex pl-4 pr-sm-4 pr-2 ml-2">
                            <a href="#" class="header-icon mr-0" title="wishlist"><i class="icon-wishlist-2"></i></a>
                            <h6 class="text-capitalize"><span>Favorites</span><a href="#">Wishlist</a></h6>
                        </div>

                        <div class="header-contact d-lg-flex pr-sm-4 pr-2">
                            <a href="#" class="header-icon mr-0" title="login"><i class="icon-user-2"></i></a>
                            <h6 class="text-capitalize"><span class="ls-n-20">Welcome</span><a href="{{ route('login') }}">Sign In</a></h6>
                        </div>
                        <div class="separator"></div>
                        <div class="header-contact d-lg-flex pr-sm-4 pr-2">
                            <h6 class="text-capitalize"><a href="{{ route('registration') }}">Register</a></h6>
                        </div>

                        <div class="separator"></div>

                        <div class="cart-dropdown-wrapper d-flex align-items-center pt-2">
                            <span class="cart-subtotal text-right font2 mr-3">Shopping Cart
                                <span class="cart-price d-block font2" style="color: #7B0405;">৳0.00</span>
                            </span>

                            <div class="dropdown cart-dropdown">
                                <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <i class="icon-cart-thick"></i>
                                    <span class="cart-count badge-circle" style="color: #7B0405;">3</span>
                                </a>

                                <div class="cart-overlay"></div>

                                <div class="dropdown-menu mobile-cart">
                                    <a href="#" title="Close (Esc)" class="btn-close">×</a>
                                    <div class="dropdownmenu-wrapper custom-scrollbar">
                                        <div class="dropdown-cart-header">Shopping Cart</div>
                                        <div class="dropdown-cart-total">
                                            <span>SUBTOTAL:</span>
                                            <span class="cart-total-price float-right">৳134.00</span>
                                        </div>
                                        <div class="dropdown-cart-action">
                                            <a href="{{ url('/cart') }}" class="btn btn-gray btn-block view-cart">View Cart</a>
                                            <a href="{{ url('/checkout') }}" class="btn btn-dark btn-block">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="main home">
            <div class="container-fluid p-0">
                <div class="row m-0">
                    <div class="sidebar-overlay"></div>
                    <div class="sidebar-toggle custom-sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
                    
                   <aside class="col-lg-3 order-lg-first sidebar-home mobile-sidebar">
    <div class="side-menu-container">
        <h2 class="side-menu-title bg-danger text-white p-3 m-0">
            <i class="fas fa-bars mr-2"></i> Categories
        </h2>
        <nav class="side-menu-body">
            <ul class="side-menu">
                @if(isset($categories))
                    @foreach($categories as $category)
                        <li>
                            <a href="{{ url('/category/' . $category->slug) }}">
                                <i class="icon-category"></i>{{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                @else
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Electronics</a></li>
                    <li><a href="#">Home & Garden</a></li>
                @endif
            </ul>
        </nav>
    </div>
</aside>

                    <!-- Dynamic Content Slot -->
                    @yield('content')

                </div>
            </div>
        </main>

        <footer class="footer font2">
            <div class="footer-bottom d-sm-flex align-items-center">
                <div class="footer-left">
                    <span class="footer-copyright">
                        Dhap All Store eCommerce. &copy; {{ date('Y') }}. All Rights Reserved
                    </span>
                </div>
            </div>
        </footer>
    </div>

    <!-- Plugins JS Files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/optional/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.plugin.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.min.js') }}"></script>
</body>
</html>