@extends('front.layout.master')

@section('title', 'Shop')

@section('body')

    <!-- Breadcrumb Section Begin  -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End-->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 product-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title st widget-title">Categories</h4>
                        <ul class="filter-catagories">
                            <li class="cat-item cat-item-19 cat-parent"><a href="#">Capsule</a></li>
                            <li class="cat-item cat-item-20"><a href="#">Injection</a></li>
                            <li class="cat-item cat-item-17"><a href="#">Medication</a></li>
                            <li class="cat-item cat-item-21"><a href="#">Ointment</a></li>
                            <li class="cat-item cat-item-23"><a href="#">Spray</a></li>
                            <li class="cat-item cat-item-22"><a href="#">Syrup</a></li>
                            <li class="cat-item cat-item-24"><a href="#">Tablet</a></li>
                            <li class="cat-item cat-item-69"><a href="#">Uncategorized</a></li>

                        </ul>

                    </div>

                    <div class="filter-widget ">
                        <h4 class="fw-title widget-title">Price</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                                <div class="price-range ui-slider ui-slider-horizontal ui-widget-content"
                                     data-min="33" data-max="98">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>

                                </div>
                            </div>
                        </div>
                        <a href="#" class="filter-btn">Filter</a>
                    </div>



                    <div class="filter-widget">
                        <h4 class="fw-title widget-title">Tags</h4>
                        <div class="fw-tags">
                            <a href="#">Capsule</a>
                            <a href="#">Injection</a>
                            <a href="#">Medication</a>
                            <a href="#">Ointment</a>
                            <a href="#">Spray</a>
                            <a href="#">Syrup</a>
                            <a href="#">Tablet</a>
                            <a href="#">Uncategorized</a>
                        </div>
                    </div>

                    <div class="filter-widget">
                        <h4 class="fw-title widget-title">Best Products</h4>
                        <ul class="product-list-widget">
                            <li>
                                <a href="">
                                    <img width="270" height="270" src="./front/img/products-sem2/product-14.jpg" alt="">
                                    <span class="product-title">White tooth scream</span>
                                </a>
                                <div>
                                    <span class="product-price">$12.00</span>
                                </div>

                            </li>
                            <li>
                                <a href="">
                                    <img width="270" height="270" src="./front/img/products-sem2/product-9.jpg" alt="">
                                    <span class="product-title">Multivitamin fresh liquid</span>
                                </a>
                                <div>
                                    <span class="product-price">$16.45</span>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img width="270" height="270" src="./front/img/products-sem2/product-10.jpg" alt="">
                                    <span class="product-title">Paraxetal 150ml liquid</span>
                                </a>
                                <div>
                                    <span class="product-price">$17.42</span>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img width="270" height="270" src="./front/img/products-sem2/product-13.jpg" alt="">
                                    <span class="product-title">Tongue sore capsule</span>
                                </a>
                                <div>
                                    <span class="product-price">$17.42</span>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img width="270" height="270" src="./front/img/products-sem2/product-12.jpg" alt="">
                                    <span class="product-title">Tongue aspirin</span>
                                </a>
                                <div>
                                    <span class="product-price">$17.42</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                    <select class="sorting" >
                                        <option value="">Default Sorting</option>
                                    </select>
                                    <select class="p-show" >
                                        <option value="">Shop</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                                <p>Show 01 - 09 Of 36 Product</p>
                            </div>
                        </div>
                    </div>
                    <div class="product list">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="./front/img/products-sem2/{{ $product->productImages[0]->path }}" alt="">
                                        @if($product->discount != null)
                                            <span class="seller__product-tag">SALE!</span>
                                        @endif
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="shop/product/{{ $product->id }}">Quick View</a></li>
                                            <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        {{--<div class="category-name">{{ $product->tag }}</div>--}}
                                        <a href="shop/product/{{ $product->id }}">
                                            <h5>{{ $product->name }}</h5>
                                        </a>
                                        <div class="product-price">
                                            @if($product->discount != null )
                                                ${{ $product->discount }} <span>${{ $product->price }}</span>
                                            @else
                                                <h4>${{ $product->price }} </h4>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

@endsection
