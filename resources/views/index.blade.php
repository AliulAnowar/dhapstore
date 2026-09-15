@extends('layout.master')
@section('content')
    <!-- End .col-lg-3 -->

    <style>
        .banner {
            /* display: flex; */
            align-items: center;
            justify-content: center;
            height: 50%;
            /* Adjust this value to distribute height evenly */
            margin-bottom: 10px;
            /* Add spacing between banners */
        }

        .banner img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .col-md-12 {
            display: flex;
            flex-direction: column;
            gap: 5px;
            /* Space between banners */
        }

        .banner-section {
            min-height: 300px;
        }

        @media (max-width: 768px) {
            .banner-section {
                min-height: 200px;
                /* Adjust for smaller screens */
            }
        }

        @media (max-width: 576px) {
            .banner-section {
                min-height: 150px;
                /* Further adjustment for very small screens */
            }
        }
    </style>

    <div class="col-lg-9">
        <div class="main-content">
            <section class="home-section mb-2">
                <div class="row">
                    <div class="col-md-12 col-xl-8 col-lg-12 mb-xl-0 mb-2">
                        <div class="home-slider slide-animate owl-carousel owl-theme show-nav-hover dot-inside nav-big h-100 text-uppercase"
                            data-owl-options="{
                                                    'loop': false,
                                                    'nav' : false,
                                                    'dots' : true
                                                }">
                            <div class="home-slide home-slide1 banner">
                                <img class="slide-bg" src="{{ asset('assets/images/final.webp') }}" alt="slider image"
                                    style="background-color: #c0e1f2;">

                                <div class="container d-flex align-items-center">
                                    <div class="banner-layer d-flex flex-column">
                                        {{-- <h6 class="text-transform-none appear-animate"
                                            data-animation-name="fadeInDownShorter" data-animation-delay="100">Exclusive
                                            Product New Arrival
                                        </h6> --}}
                                        {{-- <h2 class="text-transform-none appear-animate" data-animation-name="fadeInUpShorter"
                                            data-animation-delay="600">Condensed Milk</h2> --}}
                                        {{-- <h3 class=" appear-animate" data-animation-name="fadeInRightShorter"
                                            data-animation-delay="1100">NATURAL PRODUCT</h3> --}}
                                        {{-- <span class="custom-font text-transform-none appear-animate"
                                            data-animation-name="fadeInRightShorter"
                                            data-animation-delay="1100"><span>Extra!</span></span> --}}
                                        {{-- <h5 class=" appear-animate" data-animation-name="fadeInUpShorter"
                                            data-animation-delay="1400">BREAKFAST PRODUCTS ON SALE</h5> --}}
                                        {{-- <h4 class="d-inline-block appear-animate" data-animation-name="fadeInRightShorter"
                                            data-animation-delay="1800">
                                            <sup>UP TO</sup>
                                            <b class="coupon-sale-text ls-10 text-white align-middle">50%</b>
                                        </h4> --}}
                                    </div>
                                    <!-- End .banner-layer -->
                                </div>
                            </div>
                            <!-- End .home-slide -->

                            <div class="home-slide home-slide2 banner banner-md-vw">
                                <img class="slide-bg" src="{{ asset('assets/images/Delivered to Your Doorstep.png') }}"
                                    alt="slider image" style="background-color: #d5dade;">

                                <div class="container d-flex align-items-center">
                                    <div class="container d-flex align-items-center">
                                        <div class="banner-layer d-flex flex-column text-right">
                                            {{-- <h6 class="text-transform-none appear-animate"
                                                data-animation-name="fadeInDownShorter" data-animation-delay="100">Exclusive
                                                Whole Wheat</h6>
                                            <h2 class="text-transform-none appear-animate"
                                                data-animation-name="fadeInUpShorter" data-animation-delay="600">Fluffy
                                                Pancakes</h2>
                                            <h3 class=" appear-animate" data-animation-name="fadeInRightShorter"
                                                data-animation-delay="1100">GOOD OLD FASHIONED</h3>
                                            <h5 class=" appear-animate" data-animation-name="fadeInUpShorter"
                                                data-animation-delay="1400">BREAKFAST PRODUCTS ON SALE
                                            </h5>
                                            <h4 class="d-inline-block appear-animate"
                                                data-animation-name="fadeInRightShorter" data-animation-delay="1800">
                                                <sup>UP TO</sup>
                                                <b class="coupon-sale-text ls-10 text-white align-middle">50%</b>
                                            </h4> --}}
                                        </div>
                                        <!-- End .banner-layer -->
                                    </div>
                                </div>
                            </div>
                            <!-- End .home-slide -->
                        </div>
                        <!-- End .home-slider -->
                    </div>
                    <div class="col-md-12 col-xl-4 col-lg-12 d-sm-flex d-xl-block">
                        <div class="banner banner1 mb-2 pr-sm-3 pr-0 pr-xl-0">
                            <img class="slide-bg" src="{{ asset('assets/images/all_store_banner2.jpg') }}"
                                alt="slider image"
                                style="background-color: #d9e2e1; width: 100%; height: auto; object-fit: cover; min-height:auto">
                        </div>
                        <!-- End .home-slide -->

                        <div class="banner banner2 pl-sm-3 pl-0 pl-xl-0">
                            <img class="slide-bg" src="{{ asset('assets/images/subscribe Now.png') }}" alt="slider image"
                                style="background-color: #b48476; width: 100%; height: auto; object-fit: cover; min-height:236px;">
                        </div>
                        <!-- End .home-slide -->
                    </div>

                </div>
            </section>

            <div class="info-boxes-slider owl-carousel owl-theme appear-animate" data-animation-name="fadeInUpShorter"
                data-animation-delay="200"
                data-owl-options="{
                                'dots': false,
                                'loop': false,
                                'responsive': {
                                    '576': {
                                        'items': 2
                                    },
                                    '992': {
                                        'items': 2
                                    },
                                    '1200': {
                                        'items': 3
                                    }
                                }
                            }">
                <div class="info-box info-box-icon-left">
                    <i class="icon-shipping mr-3 pr-2"></i>

                    <div class="info-box-content">
                        <h4 class="pt-1">Free Shipping and Returns</h4>
                    </div>
                    <!-- End .info-box-content -->
                </div>
                <!-- End .info-box -->

                <div class="info-box info-box-icon-left">
                    <i class="icon-money"></i>

                    <div class="info-box-content">
                        <h4 class="ls-n-15">Money Back Guarantee</h4>
                    </div>
                    <!-- End .info-box-content -->
                </div>
                <!-- End .info-box -->

                <div class="info-box info-box-icon-left">
                    <i class="icon-support mr-3 pr-2"></i>

                    <div class="info-box-content">
                        <h4>Online Support 24/7</h4>
                    </div>
                    <!-- End .info-box-content -->
                </div>
                <!-- End .info-box -->
            </div>
            <!-- End .info-boxes-slider -->

            <section class="featured-section appear-animate" data-animation-name="fadeIn" data-animation-delay="100">
                <div class="heading d-flex align-items-center">
                    <h2 class="text-transform-none mb-0">Featured Items</h2>
                    <ul class="nav justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="best-products-tab" data-toggle="tab" href="#best-products"
                                role="tab" aria-controls="best-products" aria-selected="true">Best Sellers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="new-products-tab" data-toggle="tab" href="#new-products" role="tab"
                                aria-controls="new-products" aria-selected="false">New</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sale-products-tab" data-toggle="tab" href="#sale-products"
                                role="tab" aria-controls="sale-products" aria-selected="false">On Sale</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="best-products" role="tabpanel"
                        aria-labelledby="best-products-tab">
                        <div class="products-slider owl-carousel owl-theme owl-nav-top"
                            data-owl-options="{
                                            'margin': 20,
                                            'dots': false,
                                            'nav': true,
                                            'loop': false,
                                            'responsive': {
                                                '0': {
                                                    'items': 2
                                                },
                                                '576': {
                                                    'items': 3
                                                },
                                                '768': {
                                                    'items': 4
                                                },
                                                '992': {
                                                    'items': 4
                                                },
                                                '1500': {
                                                    'items': 6
                                                }
                                            }
                                        }">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="{{ url('/demo40-product') }}">
                                        <img src="{{ asset('assets/images/demoes/demo40/products/product-1.jpg') }}"
                                            width="205" height="205" alt="product">

                                    </a>

                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View
                                    </a>
                                    <div class="product-countdown-container">
                                        <span class="product-countdown-title">offer ends in:</span>
                                        <div class="product-countdown countdown-compact" data-until="2021, 10, 5"
                                            data-compact="true">
                                        </div>
                                        <!-- End .product-countdown -->
                                    </div>
                                    <!-- End .product-countdown-container -->
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">Tk90.00</span>
                                        <span class="product-price">Tk70.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="{{ url('/demo40-product') }}">
                                        <img src="{{ asset('assets/images/spices.webp') }}" width="205" height="205"
                                            alt="product">
                                    </a>


                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="{{ url('/demo40-shop') }}"class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">Tk90.00</span>
                                        <span class="product-price">Tk70.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="{{ url('/demo40-product') }}">
                                        <img src="{{ asset('assets/images/rice.webp') }}" width="205" height="205"
                                            alt="product">

                                    </a>

                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">Tk90.00</span>
                                        <span class="product-price">Tk70.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="{{ url('/demo40-product') }}">
                                        <img src="{{ asset('assets/images/oil.webp') }}" width="205" height="205"
                                            alt="product">
                                    </a>

                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">Tk90.00</span>
                                        <span class="product-price">Tk70.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="{{ url('/demo40-product') }}">
                                        <img src="{{ asset('assets/images/mens-care.webp') }}" width="205"
                                            height="205" alt="product">
                                    </a>

                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">Tk90.00</span>
                                        <span class="product-price">Tk70.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="{{ url('/demo40-product') }}">
                                        <img src="{{ asset('assets/images/files-folders.webp') }}" width="205"
                                            height="205" alt="product">
                                    </a>

                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">Tk90.00</span>
                                        <span class="product-price">Tk70.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="{{ url('/demo40-product') }}">
                                        <img src="{{ asset('assets/images/beverages.webp') }}" width="205"
                                            height="205" alt="product">
                                    </a>


                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">Tk90.00</span>
                                        <span class="product-price">Tk70.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .products-slider -->
                    </div>
                    <div class="tab-pane fade" id="new-products" role="tabpanel" aria-labelledby="new-products-tab">
                        <div class="products-slider owl-carousel owl-theme owl-nav-top"
                            data-owl-options="{
                                                'margin': 20,
                                                'dots': false,
                                                'nav': true,
                                                'loop': false,
                                                'responsive': {
                                                    '0': {
                                                        'items': 2
                                                    },
                                                    '576': {
                                                        'items': 3
                                                    },
                                                    '768': {
                                                        'items': 4
                                                    },
                                                    '992': {
                                                        'items': 4
                                                    },
                                                    '1500': {
                                                        'items': 6
                                                    }
                                                }
                                        }">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="{{ url('/demo40-product') }}">
                                        <img src="{{ asset('assets/images/demoes/demo40/products/product-3.jpg') }}"
                                            width="205" height="205" alt="product">
                                    </a>


                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">Tk90.00</span>
                                        <span class="product-price">Tk70.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="{{ url('/demo40-product') }}">
                                        <img src="{{ asset('assets/images/demoes/demo40/products/product-4.jpg') }}"
                                            width="205" height="205" alt="product">
                                    </a>


                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">Tk90.00</span>
                                        <span class="product-price">Tk70.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="{{ url('/demo40-product') }}">
                                        <img src="{{ asset('assets/images/demoes/demo40/products/product-11.jpg') }}"
                                            width="205" height="205" alt="product">
                                    </a>

                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">Tk90.00</span>
                                        <span class="product-price">Tk70.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="{{ url('/demo40-product') }}">
                                        <img src="{{ asset('assets/images/demoes/demo40/products/product-13.jpg') }}"
                                            width="205" height="205" alt="product">
                                    </a>


                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">Tk90.00</span>
                                        <span class="product-price">Tk70.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .products-slider -->
                    </div>
                    <div class="tab-pane fade" id="sale-products" role="tabpanel" aria-labelledby="sale-products-tab">
                        <div class="products-slider owl-carousel owl-theme"
                            data-owl-options="{
                                            'margin': 20,
                                            'dots': false,
                                            'nav': true,
                                            'loop': false,
                                            'responsive': {
                                                '0': {
                                                    'items': 2
                                                },
                                                '576': {
                                                    'items': 3
                                                },
                                                '768': {
                                                    'items': 4
                                                },
                                                '992': {
                                                    'items': 4
                                                },
                                                '1500': {
                                                    'items': 6
                                                }
                                            }
                                        }">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="{{ url('/demo40-product') }}">
                                        <img src="{{ asset('assets/images/demoes/demo40/products/product-11.jpg') }}"
                                            width="205" height="205" alt="product">
                                    </a>


                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">Tk90.00</span>
                                        <span class="product-price">Tk70.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="{{ url('/demo40-product') }}">
                                        <img src="{{ asset('assets/images/demoes/demo40/products/product-13.jpg') }}"
                                            width="205" height="205" alt="product">
                                    </a>

                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                        View
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                        </div>
                                        <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->

                                    <div class="price-box">
                                        <span class="old-price">Tk90.00</span>
                                        <span class="product-price">Tk70.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .products-slider -->
                    </div>
                </div>
            </section>

            <section class="categories-section appear-animate" data-animation-name="fadeInUpShorter"
                data-animation-delay="150">
                <div class="heading d-flex align-items-center flex-column flex-lg-row border-0 mb-0">
                    <h2 class="text-transform-none mb-0">Popular Departments</h2>
                </div>
                <div class="owl-carousel owl-theme appear-animate" data-animation-name="fadeInUpShorter"
                    data-animation-delay="200"
                    data-owl-options="{
                                        'dots': false,
                                        'margin': 20,
                                        'nav': false,
                                        'loop': false,
                                        'responsive': {
                                            '0': {
                                                'items': 2
                                            },
                                            '768': {
                                                'items': 3
                                            },
                                            '991': {
                                                'items': 3
                                            },
                                            '1200': {
                                                'items': 4
                                            }
                                        }
                                    }">
                    <div class="banner banner-image font2">
                        <a href="{{ url('/demo40-shop') }}">
                            <img src="{{ asset('assets/images/demoes/demo40/categories/category-1.jpg') }}"
                                width="374" height="200" alt="banner" style="background-color: #f4f4f4;">

                        </a>
                        <div class="banner-layer banner-layer-middle">
                            <h3>Vegetables</h3>
                            <span>2 Products </span>
                        </div>
                    </div>
                    <!-- End .banner -->

                    <div class="banner banner-image font2">
                        <a href="{{ url('/demo40-shop') }}">
                            <img src="{{ asset('assets/images/demoes/demo40/categories/category-1.jpg') }}"
                                width="374" height="200" alt="banner" style="background-color: #f4f4f4;">

                        </a>
                        <div class="banner-layer banner-layer-middle">
                            <h3>Fruits</h3>
                            <span>10 Products </span>
                        </div>
                    </div>
                    <!-- End .banner -->

                    <div class="banner banner-image font2">
                        <a href="{{ url('/demo40-product') }}">
                            <img src="{{ asset('assets/images/demoes/demo40/categories/category-1.jpg') }}"
                                width="374" height="200" alt="banner" style="background-color: #f4f4f4;">

                        </a>
                        <div class="banner-layer banner-layer-middle">
                            <h3>Cooking</h3>
                            <span>4 Products </span>
                        </div>
                    </div>
                    <!-- End .banner -->

                    <div class="banner banner-image font2">
                        <a href="{{ url('/demo40-shop') }}">
                            <img src="{{ asset('assets/images/demoes/demo40/categories/category-1.jpg') }}"
                                width="374" height="200" alt="banner" style="background-color: #f4f4f4;">

                        </a>
                        <div class="banner-layer banner-layer-middle">
                            <h3>Breakfast</h3>
                            <span>8 Products </span>
                        </div>
                    </div>
                    <!-- End .banner -->
                </div>
                <!-- End .cat-carousel -->
            </section>
            <!-- End .banners-section -->

            <section class="products-container">
                <div class="heading d-flex align-items-center appear-animate" data-animation-name="fadeInUpShorter"
                    data-animation-delay="150">
                    <h2 class="text-transform-none mb-0">Milk & Cheese</h2>
                    <a class="d-block view-all ml-auto" href="demo40-shop.html">View All<i
                            class="fas fa-chevron-right"></i></a>
                </div>
                <div class="products-slider owl-carousel owl-theme  appear-animate" data-animation-name="fadeInUpShorter"
                    data-animation-delay="200"
                    data-owl-options="{
                                            'margin': 20,
                                            'dots': false,
                                            'nav': false,
                                            'loop': false,
                                            'responsive': {
                                                '0': {
                                                    'items': 2
                                                },
                                                '576': {
                                                    'items': 3
                                                },
                                                '768': {
                                                    'items': 4
                                                },
                                                '992': {
                                                    'items': 4
                                                },
                                                '1500': {
                                                    'items': 6
                                                }
                                            }
                                        }">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="374" height="200" alt="banner" style="background-color: #f4f4f4;">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .products-slider -->
            </section>

            <section class="products-container pt-0">
                <div class="heading d-flex align-items-center appear-animate" data-animation-name="fadeInUpShorter"
                    data-animation-delay="200">
                    <h2 class="text-transform-none mb-0">Fresh Fruit</h2>
                    <a class="d-block view-all ml-auto" href="{{ url('/demo40-shop') }}">View All<i
                            class="fas fa-chevron-right"></i></a>
                </div>
                <div class="products-slider owl-carousel owl-theme appear-animate" data-animation-name="fadeIn"
                    data-animation-delay="100"
                    data-owl-options="{
                                            'margin': 20,
                                            'dots': false,
                                            'nav': false,
                                            'loop': false,
                                            'responsive': {
                                                '0': {
                                                    'items': 2
                                                },
                                                '576': {
                                                    'items': 3
                                                },
                                                '768': {
                                                    'items': 4
                                                },
                                                '992': {
                                                    'items': 4
                                                },
                                                '1500': {
                                                    'items': 6
                                                }
                                            }
                                        }">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/fresh-fruits.webp') }}" width="205" height="205"
                                    alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/lal-angur-red-grapes-12-gm-250-gm.webp') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .products-slider -->
            </section>

            <section class="products-container pt-0">
                <div class="heading d-flex align-items-center appear-animate" data-animation-name="fadeInUpShorter"
                    data-animation-delay="200">
                    <h2 class="text-transform-none mb-0">Meat & Seafood</h2>
                    <a class="d-block view-all ml-auto" href="{{ url('/demo40-shop') }}">View All<i
                            class="fas fa-chevron-right"></i></a>
                </div>
                <div class="products-slider owl-carousel owl-theme appear-animate" data-animation-name="fadeIn"
                    data-animation-delay="100"
                    data-owl-options="{
                                            'margin': 20,
                                            'dots': false,
                                            'nav': false,
                                            'loop': false,
                                            'responsive': {
                                                '0': {
                                                    'items': 2
                                                },
                                                '576': {
                                                    'items': 3
                                                },
                                                '768': {
                                                    'items': 4
                                                },
                                                '992': {
                                                    'items': 4
                                                },
                                                '1500': {
                                                    'items': 6
                                                }
                                            }
                                        }">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-17.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/for products 225.png') }}" width="205"
                                    height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/for products 225.png') }}" width="205"
                                    height="205" alt="product">


                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                {{-- <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a> --}}
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/for products 225.png') }}" width="205"
                                    height="205" alt="product">


                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .products-slider -->
            </section>

            <div class="banner-section banner-bg"
                style="background-image: url({{ asset('assets/images/demoes/demo40/banners/banner-3.jpg') }});">


                <div
                    class="banner col-md-11 m-auto d-flex align-items-center flex-column flex-sm-row justify-content-center justify-content-sm-between">
                    <div class="content-left text-center text-sm-right">
                        <h6 class="text-transform-none appear-animate" data-animation-name="fadeInDownShorter"
                            data-animation-delay="100"></h6>
                        <h2 class="text-transform-none appear-animate" data-animation-name="fadeInUpShorter"
                            data-animation-delay="600">Fluffy Pancakes
                        </h2>
                        <h3 class=" appear-animate" data-animation-name="fadeInRightShorter"
                            data-animation-delay="1100">GOOD OLD FASHIONED</h3>
                    </div>
                    <div class="content-right text-center text-sm-right">
                        <h5 class=" appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="400">
                            PRODUCTS ON SALE</h5>
                        <h4 class="d-inline-block appear-animate" data-animation-name="fadeInRightShorter"
                            data-animation-delay="800">
                            <sup>UP TO</sup>
                            <b class="coupon-sale-text ls-10 text-white align-middle">50%</b>
                        </h4>
                    </div>
                </div>
            </div>

            <section class="products-container products-section-with-border appear-animate" data-animation-name="fadeIn"
                data-animation-delay="100">
                <div class="heading d-flex align-items-center">
                    <h2 class="d-flex align-items-center text-transform-none mb-0"><i></i>Special Offers
                    </h2>
                    <a class="d-block view-all ml-auto mt-0" href="{{ url('/demo40-shop') }}">View All<i
                            class="fas fa-chevron-right"></i></a>
                </div>
                <div class="products-slider owl-carousel owl-theme"
                    data-owl-options="{
                                            'margin': 20,
                                            'dots': false,
                                            'nav': false,
                                            'loop': false,
                                            'responsive': {
                                                '0': {
                                                    'items': 2
                                                },
                                                '576': {
                                                    'items': 3
                                                },
                                                '768': {
                                                    'items': 4
                                                },
                                                '992': {
                                                    'items': 4
                                                },
                                                '1500': {
                                                    'items': 6
                                                }
                                            }
                                        }">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-17.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-6.jpg') }}"
                                    width="205" height="205" alt="product">

                            </a>

                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="{{ url('/demo40-product') }}">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="old-price">Tk90.00</span>
                                <span class="product-price">Tk70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .products-slider -->
            </section>
        @endsection
