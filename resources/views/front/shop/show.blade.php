@extends('front.layout.master')

@section('title', 'Product')

@section('body')

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
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
    <!-- Breadcrumb Section End -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
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
                                    <img width="270" height="270" src="front/img/products-sem2/product-14.jpg" alt="">
                                    <span class="product-title">White tooth scream</span>
                                </a>
                                <div>
                                    <span class="product-price">$12.00</span>
                                </div>

                            </li>
                            <li>
                                <a href="">
                                    <img width="270" height="270" src="front/img/products-sem2/product-9.jpg" alt="">
                                    <span class="product-title">Multivitamin fresh liquid</span>
                                </a>
                                <div>
                                    <span class="product-price">$16.45</span>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img width="270" height="270" src="front/img/products-sem2/product-10.jpg" alt="">
                                    <span class="product-title">Paraxetal 150ml liquid</span>
                                </a>
                                <div>
                                    <span class="product-price">$17.42</span>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img width="270" height="270" src="front/img/products-sem2/product-13.jpg" alt="">
                                    <span class="product-title">Tongue sore capsule</span>
                                </a>
                                <div>
                                    <span class="product-price">$17.42</span>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <img width="270" height="270" src="front/img/products-sem2/product-12.jpg" alt="">
                                    <span class="product-title">Tongue aspirin</span>
                                </a>
                                <div>
                                    <span class="product-price">$17.42</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img src="front/img/products-sem2/{{ $product->productImages[0]->path }}" class="product-big-img" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    @foreach($product->productImages as $productImage)
                                    <div class="pt active" data-imgbigurl="front/img/products-sem2/{{ $productImage->path }}">
                                        <img src="front/img/products-sem2/{{ $productImage->path }}" alt="">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span>{{ $product->tag }}</span>
                                    <h3>{{ $product->name }}</h3>
                                    <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                </div>
                                <div class="pd-rating">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $avgRating)
                                        <i class="fa fa-star"></i>
                                        @else
                                        <i class="fa fa-star-o"></i>
                                        @endif
                                    @endfor
                                    <span>({{ count($product->productComments) }})</span>
                                </div>
                                <div class="pd-desc">
                                    <p>{{ $product->content }}</p>

                                    @if($product->discount != null )
                                        <h4>${{ $product->discount }} <span>${{ $product->price }}</span></h4>
                                    @else
                                        <h4>${{ $product->price }} </h4>
                                    @endif
                                </div>

                                <div class="pd-size-choose">
                                    @foreach(array_unique(array_column($product->productDetails->toArray(), 'size')) as $productSize)
                                        <div class="sc-item">
                                            <input type="radio" id="sm-{{ $productSize }}">
                                            <label for="sm-{{ $productSize }}">{{ $productSize }}</label>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                        <a href="#" class="primary-btn pd-cart">Add To Cart</a>
                                    </div>
                                </div>
                                <ul class="pd-tags">
                                    <li><span>CATEGORIES</span>: {{ $product->productCategory->name }}</li>
                                    <li><SPAN>TAGS</SPAN>: {{ $product->tag }}</li>
                                </ul>
                                <div class="pd-share">
                                    <!-- <div class="p-code">Sku: 00012</div> -->
                                    <div class="pd-social">
                                        Share:
                                        <span>
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-linkedin"></i></a>
                                        <a href="#"><i class="ti-tumblr-alt"></i></a>
                                        <a href="#"><i class="ti-vimeo-alt"></i></a>
                                        <a href="#"><i class="ti-sharethis"></i></a>


                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab">
                        <div class="tab-item">
                            <ul class="nav" role="tablist">
                                <li><a href="#tab-1" data-toggle="tab" role="tab">DESCIPTION</a></li>
                                <li><a href="#tab-2" data-toggle="tab" role="tab">SPECIFICATIONS</a></li>
                                <li><a href="#tab-3" data-toggle="tab" role="tab">Customer Reviews ({{ count($product->productComments) }})</a></li>
                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                    <div class="product-content">
                                        {!! $product->description !!}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                    <div class="specification-table">
                                        <table>
                                            <tr>
                                                <td class="p-catagory">Customer Rating</td>
                                                <td>
                                                    <div class="pd-rating">
                                                        @for($i = 1; $i <= 5; $i++)
                                                            @if($i <= $avgRating)
                                                                <i class="fa fa-star"></i>
                                                            @else
                                                                <i class="fa fa-star-o"></i>
                                                            @endif
                                                        @endfor
                                                        <span>({{ count($product->productComments) }})</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Price</td>
                                                <td>
                                                    <div class="p-price">
                                                        ${{ $product->price }}
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Add To Cart</td>
                                                <td>
                                                    <div class="cart-add">+ add to cart</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Availability</td>
                                                <td>
                                                    <div class="p-stock">{{ $product->qty }} in stock</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Weight</td>
                                                <td>
                                                    <div class="p-weight">{{ $product->weight }}kg</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Size</td>
                                                <td>
                                                    <div class="p-size">
                                                        @foreach(array_unique(array_column($product->productDetails->toArray(), 'size')) as $productSize)
                                                            {{ $productSize }},
                                                        @endforeach
                                                    </div>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                    <div class="customer-review-option">
                                        <h4>{{ count($product->productComments) }} Comments</h4>
                                        <div class="comment-option">
                                            @foreach($product->productComments as $productComment)
                                                <div class="co-item">
                                                    <div class="avatar-pic">
                                                        <img src="front/img/avatar/{{ $productComment->user->avatar ?? 'default-user.png' }}" alt="">
                                                    </div>
                                                    <div class="avatar-text">
                                                        <div class="at-rating">
                                                            @for($i = 1; $i <= 5; $i++)
                                                                @if($i <= $avgRating)
                                                                    <i class="fa fa-star"></i>
                                                                @else
                                                                    <i class="fa fa-star-o"></i>
                                                                @endif
                                                            @endfor

                                                        </div>
                                                        <h5>{{$productComment->name}} <span>{{ date('M d, Y', strtotime($productComment->created_at))  }}</span></h5>
                                                        <div class="at-reply">{{ $productComment->messages }}</div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="leave-comment">
                                            <h4>Leave a comment</h4>
                                            <form action="" method="post" class="comment-form">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="hidden" name="user_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id ?? null }}">

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Name" name="name">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Email" name="email">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <textarea placeholder="Messages" name="messages"></textarea>

                                                        <div class="personal-rating">
                                                            <h6>Your Rating</h6>
                                                            <div class="rate">
                                                                <input type="radio" id="star5" name="rating" value="5" />
                                                                <label for="star5" title="text">5 stars</label>
                                                                <input type="radio" id="star4" name="rating" value="4" />
                                                                <label for="star4" title="text">4 stars</label>
                                                                <input type="radio" id="star3" name="rating" value="3" />
                                                                <label for="star3" title="text">3 stars</label>
                                                                <input type="radio" id="star2" name="rating" value="2" />
                                                                <label for="star2" title="text">2 stars</label>
                                                                <input type="radio" id="star1" name="rating" value="1" />
                                                                <label for="star1" title="text">1 star</label>
                                                            </div>
                                                        </div>

                                                        <button type="submit" class="site-btn">Send message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Related Products Section Begin -->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item product-item-border">
                        <div class="pi-pic pi-pic-border">
                            <img src="front/img/products-sem2/product-3.jpg" alt="">
                            <div class="sale pp-sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="product.html">+ Quick View</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <a href="#">
                                <h5>Cancer Medicine</h5>
                            </a>
                            <div class="product-price">
                                $12.00
                                <span>$16.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item product-item-border">
                        <div class="pi-pic">
                            <img src="front/img/products-sem2/product-7.jpg" alt="">
                            <div class="new pp-new">New</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="product.html">+ Quick View</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <a href="#">
                                <h5>Heart Tablet</h5>
                            </a>
                            <div class="product-price">
                                $18.65
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item product-item-border product-item product-item-border-border">
                        <div class="pi-pic">
                            <img src="front/img/products-sem2/product-13.jpg" alt="">
                            <!-- <div class="sale pp-sale">Sale</div> -->
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="product.html">+ Quick View</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <a href="#">
                                <h5>Tongue sore capsule</h5>
                            </a>
                            <div class="product-price">
                                $17.42
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item product-item-border">
                        <div class="pi-pic">
                            <img src="front/img/products-sem2/product-6.jpg" alt="">
                            <!-- <div class="sale pp-sale">Sale</div> -->
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="product.html">+ Quick View</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <a href="#">
                                <h5>Freckles Treatment</h5>
                            </a>
                            <div class="product-price">
                                $11.89
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Related Products Section End -->

@endsection
