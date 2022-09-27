<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <base href="{{ asset('/') }}">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="front/css/base.css">
    <link rel="stylesheet" href="front/css/grid.css">
    <link rel="stylesheet" href="front/css/footer.css">
    <link rel="stylesheet" href="front/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="front/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/style.css" type="text/css">
    <link rel="stylesheet" href="front/css/vietanh.css" type="text/css">
</head>

<body>
<!-- Start coding here -->

<!-- Page Preloder -->
<div id="preloder">
    <div class="load">

    </div>
</div>

<!-- Header section begin -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class="fa fa-envelope"></i>
                    info@gmail.com
                </div>
                <div class="phone-service">
                    <i class="fa fa-phone"></i>
                    +1 2123431725
                </div>
            </div>

            <div class="ht-right">
                <a href="./login" class="login-panel">
                    <i class="fa fa-user"></i>
                    Login
                </a>

                <div class="top-social">
                    <a href="#">
                        <i class="ti-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="ti-twitter-alt"></i>
                    </a>
                    <a href="#">
                        <i class="ti-linkedin"></i>
                    </a>
                    <a href="#">
                        <i class="ti-pinterest"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="contain">
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./">
                                <img src="https://demo.harutheme.com/clarivo/wp-content/uploads/2018/03/logo.png" height="25" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>2</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td class="si-pic ">
                                                    <img src="front/img/products-sem2/product-1.jpg" alt="" class="cart-hover-pic">
                                                </td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>$60.00 x 1</p>
                                                        <h6>Kabino Bedside Table</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-cose"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="si-pic">
                                                    <img src="front/img/products-sem2/product-2.jpg" alt="" class="cart-hover-pic">
                                                </td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>$60.00 x 1</p>
                                                        <h6>Kabino Bedside Table</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-cose"></i>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$120.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="shopping-cart.html" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="check-out.html" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">
                                $150.00
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="nav-item">
        <div class="container nav-middle">
            <div class="nav-menu mobile-menu">
                <ul>
                    <li class="{{  (request()->segment(1) == '') ? 'active' : '' }}"><a href="./">Home</a></li>
                    <li class="{{  (request()->segment(1) == 'shop') ? 'active' : '' }}"><a href="./shop">Shop</a></li>
                    <li class="{{  (request()->segment(1) == 'blog') ? 'active' : '' }}"><a href="./blog">Blog</a></li>
                    <li class="{{  (request()->segment(1) == 'contact') ? 'active' : '' }}"><a href="./contact">Contact</a></li>
                    <li class="{{  (request()->segment(1) == 'about') ? 'active' : '' }}"><a href="">About</a></li>
                    <li>
                        <a href="">Pages</a>
                        <ul class="dropdown">
                            <li><a href="./blog/blog_details">Blog Details</a></li>
                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                            <li><a href="check-out.html">Checkout</a></li>
                            <li><a href="./faq">Faq</a></li>
                            <li><a href="./login/register">Register</a></li>
                            <li><a href="./login">Login</a></li>
                        </ul></li>
                </ul>
            </div>

            <div id="mobile-menu-wrap">

            </div>
        </div>
    </div>
</header>

<!-- Header section end -->



@yield('body')


<!-- Partner Logo Section Begin -->


{{--<div class="partner-logo">
    <div class="container">
        <div class="logo-carousel owl-carousel">
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-1.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-2.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-3.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-4.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="front/img/logo-carousel/logo-5.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>--}}
<!-- Partner Logo Section End -->

<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="./">
                            <img src="https://demo.harutheme.com/clarivo/wp-content/uploads/2018/03/logo-white.png" height="25" alt="">
                        </a>
                    </div>
                    <ul>
                        <li>PO Box 16122 Collins Street, West Victoria 8007, Australia</li>
                        <li>Phone: +1 2123431725</li>
                        <li>Email: info@gmail.com</li>
                    </ul>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Checkout</a></li>
                        <li><a href="./contact">Contact</a></li>
                        <li><a href="">Serivius</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href="">My Account</a></li>
                        <li><a href="./contact">Contact</a></li>
                        <li><a href="">Shopping cart</a></li>
                        <li><a href="./shop">Shop</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="newslatter-item">
                    <h5>Join Our Newsletter Now</h5>
                    <p>Get E-mail updates about our latest shop and special offers</p>
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Enter Our Mail">
                        <button type="button">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        Copyright <script>document.write(new Date().getFullYear());</script> All right reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://CodeLean.vn" target="_blank">CodeLean</a>
                    </div>
                    <div class="payment-pic">
                        <img src="front/front/img/payment-method.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="front/js/jquery-3.3.1.min.js"></script>
<script src="front/js/bootstrap.min.js"></script>
<script src="front/js/jquery-ui.min.js"></script>
<script src="front/js/jquery.countdown.min.js"></script>
<script src="front/js/jquery.nice-select.min.js"></script>
<script src="front/js/jquery.zoom.min.js"></script>
<script src="front/js/jquery.dd.min.js"></script>
<script src="front/js/jquery.slicknav.js"></script>
<script src="front/js/owl.carousel.min.js"></script>
<script src="front/js/main.js"></script>
</body>

</html>
