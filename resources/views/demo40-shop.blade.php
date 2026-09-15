@extends('layout.master')
@section('content')
    <!-- End .col-lg-3 -->

    <div class="col-lg-9">
        <div class="main-content">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Men</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Accessories</li>
                </ol>
            </nav>

            <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                <div class="toolbox-left">
                    <a href="#" class="sidebar-toggle"><svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32"
                            xmlns="http://www.w3.org/2000/svg">
                            <line x1="15" x2="26" y1="9" y2="9" class="cls-1"></line>
                            <line x1="6" x2="9" y1="9" y2="9" class="cls-1"></line>
                            <line x1="23" x2="26" y1="16" y2="16" class="cls-1"></line>
                            <line x1="6" x2="17" y1="16" y2="16" class="cls-1"></line>
                            <line x1="17" x2="26" y1="23" y2="23" class="cls-1"></line>
                            <line x1="6" x2="11" y1="23" y2="23" class="cls-1"></line>
                            <path d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z"
                                class="cls-2"></path>
                            <path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z" class="cls-2">
                            </path>
                            <path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
                            <path d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z"
                                class="cls-2"></path>
                        </svg>
                        <span>Filter</span>
                    </a>

                    <div class="toolbox-item toolbox-sort">
                        <label>Sort By:</label>

                        <div class="select-custom">
                            <select name="orderby" class="form-control">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </div>
                        <!-- End .select-custom -->


                    </div>
                    <!-- End .toolbox-item -->
                </div>
                <!-- End .toolbox-left -->

                <div class="toolbox-right">
                    <div class="toolbox-item toolbox-show">
                        <label>Show:</label>

                        <div class="select-custom">
                            <select name="count" class="form-control">
                                <option value="12">18</option>
                                <option value="24">36</option>
                            </select>
                        </div>
                        <!-- End .select-custom -->
                    </div>
                    <!-- End .toolbox-item -->

                    <div class="toolbox-item layout-modes">
                        <a href="{{ url('/category') }}" class="layout-btn btn-grid active" title="Grid">
                            <i class="icon-mode-grid"></i>
                        </a>
                        <a href="category-list.html" class="layout-btn btn-list" title="List">
                            <i class="icon-mode-list"></i>
                        </a>
                    </div>
                    <!-- End .layout-modes -->
                </div>
                <!-- End .toolbox-right -->
            </nav>

            <div class="row products-group">
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/product_300.png') }}" width="205"
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
                                <a href=# class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                <span class="old-price">৳90.00</span>
                                <span class="product-price">৳70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-sm-4 -->

                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
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
                                <a href=# class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                <span class="old-price">৳90.00</span>
                                <span class="product-price">৳70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-sm-4 -->

                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-18.jpg') }}"
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
                                <a href=# class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                <span class="old-price">৳90.00</span>
                                <span class="product-price">৳70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-sm-4 -->

                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
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
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href=# class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                <span class="old-price">৳90.00</span>
                                <span class="product-price">৳70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-sm-4 -->

                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-24.jpg') }}"
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
                                <a href=# class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                <span class="old-price">৳90.00</span>
                                <span class="product-price">৳70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-sm-4 -->

                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
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
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}"class="product-category">category</a>
                                </div>
                                <a href=# class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                <span class="old-price">৳90.00</span>
                                <span class="product-price">৳70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-sm-4 -->

                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/product_300.png') }}" width="205" height="205"
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
                                <a href=# class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                <span class="old-price">৳90.00</span>
                                <span class="product-price">৳70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-sm-4 -->

                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
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
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href=# class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                <span class="old-price">৳90.00</span>
                                <span class="product-price">৳70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-sm-4 -->

                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
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

                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href=# class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                <span class="old-price">৳90.00</span>
                                <span class="product-price">৳70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-sm-4 -->

                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ url('/demo40-product') }}">
                                <img src="{{ asset('assets/images/demoes/demo40/products/product-22.jpg') }}"
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
                                    <a href="{{ url('/category') }}" class="product-category">category</a>
                                </div>
                                <a href=# class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                <span class="old-price">৳90.00</span>
                                <span class="product-price">৳70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-sm-4 -->

                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
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
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href=# class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                <span class="old-price">৳90.00</span>
                                <span class="product-price">৳70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-sm-4 -->

                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
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
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href=# class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                <span class="old-price">৳90.00</span>
                                <span class="product-price">৳70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .col-sm-4 -->

                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
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
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href=# class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                <span class="old-price">৳90.00</span>
                                <span class="product-price">৳70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
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
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href=# class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                <span class="old-price">৳90.00</span>
                                <span class="product-price">৳70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
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
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href=# class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                <span class="old-price">৳90.00</span>
                                <span class="product-price">৳70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
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
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href=# class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                <span class="old-price">৳90.00</span>
                                <span class="product-price">৳70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
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
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href=# class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                <span class="old-price">৳90.00</span>
                                <span class="product-price">৳70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
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
                            <a href="{{ asset('assets/ajax/product-quick-view.html') }}" class="btn-quickview"
                                title="Quick View">Quick View</a>

                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ url('/demo40-shop') }}" class="product-category">category</a>
                                </div>
                                <a href=# class="btn-icon-wish"><i class="icon-heart"></i></a>
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
                                <span class="old-price">৳90.00</span>
                                <span class="product-price">৳70.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
            </div>
            <!-- End .row -->

            <nav class="toolbox toolbox-pagination">
                <div class="toolbox-item toolbox-show">
                    <label>Show:</label>

                    <div class="select-custom">
                        <select name="count" class="form-control">
                            <option value="12">18</option>
                            <option value="36">36</option>
                        </select>
                    </div>
                    <!-- End .select-custom -->
                </div>
                <!-- End .toolbox-item -->

                <ul class="pagination toolbox-item">
                    <li class="page-item disabled">
                        <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><span class="page-link">...</span></li>
                    <li class="page-item">
                        <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                    </li>
                </ul>
            </nav>
        @endsection
