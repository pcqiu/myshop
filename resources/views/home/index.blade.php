@extends('home.common.app')
@section('title','pcqiu-shop')
@section('keywords','pcqiu-shop')
@section('description','pcqiu-shop')
@section('main')
<div class="wrapper">
<!-- START HEADER SECTION -->
@include('home.common.header')
<!-- END HEADER SECTION -->

<!-- START SLIDER SECTION -->
<div class="home-slider-section section">
    <!-- Home Slider -->
    <div id="home-slider" class="slides">
        <img src="img/slider/1.jpg" alt="" title="#slider-caption-1"  />
        <img src="img/slider/2.jpg" alt="" title="#slider-caption-2"  />
    </div>
    <!-- Caption 1 -->
    <div id="slider-caption-1" class="nivo-html-caption">
        <div class="container">
            <div class="row">
                <div class="hero-slider-content col-sm-8 col-xs-12">
                    <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Awesome Dsr Chair</h1>
                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
                    <a href="product-details.html" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">shop now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Caption 2 -->
    <div id="slider-caption-2" class="nivo-html-caption">
        <div class="container">
            <div class="row">
                <div class="hero-slider-content col-sm-8 col-xs-12">
                    <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Arc Floor Lamp</h1>
                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
                    <a href="product-details.html" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">shop now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SLIDER SECTION -->

<!-- PRODUCT SECTION START -->
<div class="product-section section pt-120 pb-120">
    <div class="container">

        <div class="row">
            <!-- Isotop Product Filter -->
            <div class="isotope-product-filter col-xs-8">
                <button class="active" data-filter="*">all</button>
                <button data-filter=".chair">chair</button>
                <button data-filter=".ptable">table</button>
                <button data-filter=".home-decor">home decor</button>
                <button data-filter=".lighting">lighting</button>
            </div>
            <!-- Product Filter Toggle -->
            <div class="col-xs-4">
                <button class="product-filter-toggle">filter</button>
            </div>
        </div>

        <!-- Product Filter Wrapper -->
        <div class="row">
            <div class="col-xs-12">
                <div class="product-filter-wrapper">
                    <!-- Product Filter -->
                    <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                        <h5>Sort by</h5>
                        <ul class="sort-by">
                            <li><a href="#">Default</a></li>
                            <li><a href="#">Popularity</a></li>
                            <li><a href="#">Average rating</a></li>
                            <li><a href="#">Newness</a></li>
                            <li><a href="#">Price: Low to High</a></li>
                            <li><a href="#">Price: High to Low</a></li>
                        </ul>
                    </div>
                    <!-- Product Filter -->
                    <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                        <h5>color filters</h5>
                        <ul class="color-filter">
                            <li><a href="#"><i style="background-color: #000000;"></i>Black</a></li>
                            <li><a href="#"><i style="background-color: #663300;"></i>Brown</a></li>
                            <li><a href="#"><i style="background-color: #FF6801;"></i>Orange</a></li>
                            <li><a href="#"><i style="background-color: #ff0000;"></i>red</a></li>
                            <li><a href="#"><i style="background-color: #FFEE00;"></i>Yellow</a></li>
                        </ul>
                    </div>
                    <!-- Product Filter -->
                    <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                        <h5>product tags</h5>
                        <div class="product-tags">
                            <a href="#">New</a>,
                            <a href="#">brand</a>,
                            <a href="#">black</a>,
                            <a href="#">white</a>,
                            <a href="#">chire</a>,
                            <a href="#">table</a>,
                            <a href="#">Lorem</a>,
                            <a href="#">ipsum</a>,
                            <a href="#">dolor</a>,
                            <a href="#">sit</a>,
                            <a href="#">amet</a>
                        </div>
                    </div>
                    <!-- Product Filter -->
                    <div class="product-filter col-md-3 col-sm-6 col-xs-12 mb-30">
                        <h5>Filter by price</h5>
                        <div id="price-range"></div>
                        <div class="price-values">
                            <span>Price:</span>
                            <input type="text" class="price-amount">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="isotope-grid row">
            <!-- Product Item Start -->
            <div class="isotope-item chair home-decor col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-50">
                <div class="product-item text-center">
                    <!-- Product Image -->
                    <div class="product-img">
                        <!-- Image -->
                        <a class="image" href="product-details.html"><img src="img/product/1.jpg" alt=""/></a>
                        <!-- Wishlist Button -->
                        <a class="wishlist" href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                        <!-- Action Button -->
                        <div class="action-btn fix">
                            <a href="#" data-toggle="modal"  data-target="#quickViewModal" title="Quick View"><i class="pe-7s-look"></i>Quick view</a>
                            <a href="#" title="Add to Cart"><i class="pe-7s-cart"></i>add to cart</a>
                        </div>
                    </div>
                    <!-- Portfolio Info -->
                    <div class="product-info text-left">
                        <!-- Title -->
                        <h5 class="title"><a href="product-details.html">Le Parc Minotti Chair</a></h5>
                        <!-- Price Ratting -->
                        <div class="price-ratting fix">
                            <span class="price float-left"><span class="new">€169.00</span></span>
                            <span class="ratting float-right">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Item End -->
            <!-- Product Item Start -->
            <div class="isotope-item ptable col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-50">
                <div class="product-item text-center">
                    <!-- Product Image -->
                    <div class="product-img">
                        <!-- Image -->
                        <a class="image" href="product-details.html"><img src="img/product/2.jpg" alt=""/></a>
                        <!-- Wishlist Button -->
                        <a class="wishlist" href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                        <!-- Action Button -->
                        <div class="action-btn fix">
                            <a href="#" data-toggle="modal"  data-target="#quickViewModal" title="Quick View"><i class="pe-7s-look"></i>Quick view</a>
                            <a href="#" title="Add to Cart"><i class="pe-7s-cart"></i>add to cart</a>
                        </div>
                    </div>
                    <!-- Portfolio Info -->
                    <div class="product-info text-left">
                        <!-- Title -->
                        <h5 class="title"><a href="product-details.html">DSR Eiffel chair</a></h5>
                        <!-- Price Ratting -->
                        <div class="price-ratting fix">
                            <span class="price float-left"><span class="new">€137.00</span><span class="old">€115.00</span></span>
                            <span class="ratting float-right">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Item End -->
            <!-- Product Item Start -->
            <div class="isotope-item lighting col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-50">
                <div class="product-item text-center">
                    <!-- Product Image -->
                    <div class="product-img">
                        <!-- Image -->
                        <a class="image" href="product-details.html"><img src="img/product/8.jpg" alt=""/></a>
                        <!-- Wishlist Button -->
                        <a class="wishlist" href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                        <!-- Action Button -->
                        <div class="action-btn fix">
                            <a href="#" data-toggle="modal"  data-target="#quickViewModal" title="Quick View"><i class="pe-7s-look"></i>Quick view</a>
                            <a href="#" title="Add to Cart"><i class="pe-7s-cart"></i>add to cart</a>
                        </div>
                    </div>
                    <!-- Portfolio Info -->
                    <div class="product-info text-left">
                        <!-- Title -->
                        <h5 class="title"><a href="product-details.html">pendant lights</a></h5>
                        <!-- Price Ratting -->
                        <div class="price-ratting fix">
                            <span class="price float-left"><span class="new">€245.00</span></span>
                            <span class="ratting float-right">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Item End -->
            <!-- Product Item Start -->
            <div class="isotope-item ptable home-decor col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-50">
                <div class="product-item text-center">
                    <!-- Product Image -->
                    <div class="product-img">
                        <!-- Image -->
                        <a class="image" href="product-details.html"><img src="img/product/3.jpg" alt=""/></a>
                        <!-- Wishlist Button -->
                        <a class="wishlist" href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                        <!-- Action Button -->
                        <div class="action-btn fix">
                            <a href="#" data-toggle="modal"  data-target="#quickViewModal" title="Quick View"><i class="pe-7s-look"></i>Quick view</a>
                            <a href="#" title="Add to Cart"><i class="pe-7s-cart"></i>add to cart</a>
                        </div>
                    </div>
                    <!-- Portfolio Info -->
                    <div class="product-info text-left">
                        <!-- Title -->
                        <h5 class="title"><a href="product-details.html">3d laser cut models</a></h5>
                        <!-- Price Ratting -->
                        <div class="price-ratting fix">
                            <span class="price float-left"><span class="new">￥185.00</span><span class="old">€125..00</span></span>
                            <span class="ratting float-right">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Item End -->
            <!-- Product Item Start -->
            <div class="isotope-item chair lighting col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-50">
                <div class="product-item text-center">
                    <!-- Product Image -->
                    <div class="product-img">
                        <!-- Image -->
                        <a class="image" href="product-details.html"><img src="img/product/4.jpg" alt=""/></a>
                        <!-- Wishlist Button -->
                        <a class="wishlist" href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                        <!-- Action Button -->
                        <div class="action-btn fix">
                            <a href="#" data-toggle="modal"  data-target="#quickViewModal" title="Quick View"><i class="pe-7s-look"></i>Quick view</a>
                            <a href="#" title="Add to Cart"><i class="pe-7s-cart"></i>add to cart</a>
                        </div>
                    </div>
                    <!-- Portfolio Info -->
                    <div class="product-info text-left">
                        <!-- Title -->
                        <h5 class="title"><a href="product-details.html">carl hansen ch25</a></h5>
                        <!-- Price Ratting -->
                        <div class="price-ratting fix">
                            <span class="price float-left"><span class="new">€245.00</span></span>
                            <span class="ratting float-right">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Item End -->
            <!-- Product Item Start -->
            <div class="isotope-item chair col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-50">
                <div class="product-item text-center">
                    <!-- Product Image -->
                    <div class="product-img">
                        <!-- Image -->
                        <a class="image" href="product-details.html"><img src="img/product/5.jpg" alt=""/></a>
                        <!-- Wishlist Button -->
                        <a class="wishlist" href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                        <!-- Action Button -->
                        <div class="action-btn fix">
                            <a href="#" data-toggle="modal"  data-target="#quickViewModal" title="Quick View"><i class="pe-7s-look"></i>Quick view</a>
                            <a href="#" title="Add to Cart"><i class="pe-7s-cart"></i>add to cart</a>
                        </div>
                    </div>
                    <!-- Portfolio Info -->
                    <div class="product-info text-left">
                        <!-- Title -->
                        <h5 class="title"><a href="product-details.html">DSR Eiffel chair</a></h5>
                        <!-- Price Ratting -->
                        <div class="price-ratting fix">
                            <span class="price float-left"><span class="new">€137.00</span><span class="old">€115.00</span></span>
                            <span class="ratting float-right">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Item End -->
            <!-- Product Item Start -->
            <div class="isotope-item ptable col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-50">
                <div class="product-item text-center">
                    <!-- Product Image -->
                    <div class="product-img">
                        <!-- Image -->
                        <a class="image" href="product-details.html"><img src="img/product/6.jpg" alt=""/></a>
                        <!-- Wishlist Button -->
                        <a class="wishlist" href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                        <!-- Action Button -->
                        <div class="action-btn fix">
                            <a href="#" data-toggle="modal"  data-target="#quickViewModal" title="Quick View"><i class="pe-7s-look"></i>Quick view</a>
                            <a href="#" title="Add to Cart"><i class="pe-7s-cart"></i>add to cart</a>
                        </div>
                    </div>
                    <!-- Portfolio Info -->
                    <div class="product-info text-left">
                        <!-- Title -->
                        <h5 class="title"><a href="product-details.html">Retro chairs</a></h5>
                        <!-- Price Ratting -->
                        <div class="price-ratting fix">
                            <span class="price float-left"><span class="new">€169.00</span></span>
                            <span class="ratting float-right">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Item End -->
            <!-- Product Item Start -->
            <div class="isotope-item home-decor lighting col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-50">
                <div class="product-item text-center">
                    <!-- Product Image -->
                    <div class="product-img">
                        <!-- Image -->
                        <a class="image" href="product-details.html"><img src="img/product/7.jpg" alt=""/></a>
                        <!-- Wishlist Button -->
                        <a class="wishlist" href="#" title="Wishlist"><i class="pe-7s-like"></i></a>
                        <!-- Action Button -->
                        <div class="action-btn fix">
                            <a href="#" data-toggle="modal"  data-target="#quickViewModal" title="Quick View"><i class="pe-7s-look"></i>Quick view</a>
                            <a href="#" title="Add to Cart"><i class="pe-7s-cart"></i>add to cart</a>
                        </div>
                    </div>
                    <!-- Portfolio Info -->
                    <div class="product-info text-left">
                        <!-- Title -->
                        <h5 class="title"><a href="product-details.html">kichler pendant light</a></h5>
                        <!-- Price Ratting -->
                        <div class="price-ratting fix">
                            <span class="price float-left"><span class="new">€185.00</span><span class="old">€125..00</span></span>
                            <span class="ratting float-right">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Item End -->
        </div>

        <div class="row">
            <div class="text-center col-xs-12 mt-30">
                <a href="#" class="btn load-more-product">load more</a>
            </div>
        </div>

    </div>
</div>
<!-- PRODUCT SECTION END -->

<!-- QUICK VIEW MODAL START-->
<div id="quickViewModal" class="modal fade" >
    <div class="container">
        <div class="modal-content row">
            <div class="modal-body">
                <button class="close" data-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                <!-- QuickView Product Images -->
                <div class="col-md-5 col-sm-6 col-xs-12 mb-40">
                    <!-- Tab panes -->
                    <div class="tab-content mb-10">
                        <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                            <img src="img/product/2.jpg" alt="" />
                        </div>
                        <div class="pro-large-img tab-pane" id="pro-large-img-2">
                            <img src="img/product/1.jpg" alt="" />
                        </div>
                        <div class="pro-large-img tab-pane" id="pro-large-img-3">
                            <img src="img/product/3.jpg" alt="" />
                        </div>
                        <div class="pro-large-img tab-pane" id="pro-large-img-4">
                            <img src="img/product/4.jpg" alt="" />
                        </div>
                        <div class="pro-large-img tab-pane" id="pro-large-img-5">
                            <img src="img/product/5.jpg" alt="" />
                        </div>
                    </div>
                    <!-- QuickView Product Thumbnail Slider -->
                    <div class="pro-thumb-img-slider">
                        <div><a href="#pro-large-img-1" data-toggle="tab"><img src="img/product/2.jpg" alt="" /></a></div>
                        <div><a href="#pro-large-img-2" data-toggle="tab"><img src="img/product/1.jpg" alt="" /></a></div>
                        <div><a href="#pro-large-img-3" data-toggle="tab"><img src="img/product/3.jpg" alt="" /></a></div>
                        <div><a href="#pro-large-img-4" data-toggle="tab"><img src="img/product/4.jpg" alt="" /></a></div>
                        <div><a href="#pro-large-img-5" data-toggle="tab"><img src="img/product/5.jpg" alt="" /></a></div>
                    </div>
                </div>
                <!-- QuickView Product Details -->
                <div class="col-md-7 col-sm-6 col-xs-12 mb-40">
                    <div class="product-details section">
                        <!-- Title -->
                        <h1 class="title">DSR Eiffel chair</h1>
                        <!-- Price Ratting -->
                        <div class="price-ratting section">
                            <!-- Price -->
                            <span class="price float-left"><span class="new">€ 120.00</span></span>
                            <!-- Ratting -->
                            <span class="ratting float-right">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <span> (01 Customer Review)</span>
                            </span>
                        </div>
                        <!-- Short Description -->
                        <div class="short-desc section">
                            <h5 class="pd-sub-title">Quick Overview</h5>
                            <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. make an ami jani na.</p>
                        </div>
                        <!-- Product Size -->
                        <div class="product-size section">
                            <h5 class="pd-sub-title">Select Size</h5>
                            <button>s</button>
                            <button class="active">m</button>
                            <button>x</button>
                            <button>xl</button>
                        </div>
                        <!-- Product Color -->
                        <div class="color-list section">
                            <h5 class="pd-sub-title">Select Color</h5>
                            <button class="active" style="background-color: #51bd99;"><i class="fa fa-check"></i></button>
                            <button style="background-color: #ff7a5f;"><i class="fa fa-check"></i></button>
                            <button style="background-color: #baa6c2;"><i class="fa fa-check"></i></button>
                            <button style="background-color: #414141;"><i class="fa fa-check"></i></button>
                        </div>
                        <!-- Quantity Cart -->
                        <div class="quantity-cart section">
                            <div class="product-quantity">
                                <input type="text" value="0">
                            </div>
                            <button class="add-to-cart">add to cart</button>
                        </div>
                        <!-- Usefull Link -->
                        <ul class="usefull-link section">
                            <li><a href="#"><i class="pe-7s-mail"></i> Email to a Friend</a></li>
                            <li><a href="#"><i class="pe-7s-like"></i> Wishlist</a></li>
                            <li><a href="#"><i class="pe-7s-print"></i> print</a></li>
                        </ul>
                        <!-- Share -->
                        <div class="share-icons section">
                            <span>share :</span>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- QUICK VIEW MODAL END-->

<!-- FOOTER TOP SECTION START -->
<div class="footer-top-section section pt-100 pb-60">
	<div class="container">
		<div class="row">

            <!-- Footer Widget -->
			<div class="footer-widget col-md-4 col-sm-6 col-xs-12 mb-40">
				<h5 class="widget-title">ABOUT THE STORE</h5>
				<p>There are many variations of passages of Lor available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
			</div>

			<!-- Footer Widget -->
			<div class="footer-widget col-md-3 col-sm-6 col-xs-12 mb-40">
				<h5 class="widget-title">CUSTOMER SERVICE</h5>
				<ul>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Returns & Refunds</a></li>
					<li><a href="#">Terms & Conditions</a></li>
					<li><a href="#">online store</a></li>
				</ul>
			</div>

			<!-- Footer Widget -->
			<div class="footer-widget col-md-2 col-sm-6 col-xs-12 mb-40">
				<h5 class="widget-title">PROFILE</h5>
				<ul>
					<li><a href="#">my Account</a></li>
					<li><a href="#">Checkout</a></li>
					<li><a href="#">help</a></li>
					<li><a href="#">support</a></li>
				</ul>
			</div>

			<!-- Footer Widget -->
			<div class="footer-widget col-md-3 col-sm-6 col-xs-12 mb-40">
				<h5 class="widget-title">SIGN UP FOR OUR AWESOME NEWS</h5>
				<form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="sunscribe-form validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                        <label for="mce-EMAIL" class="hidden">Subscribe to our mailing list</label>
                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </div>
                </form>
                <div class="footer-social fix">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
			</div>

		</div>
	</div>
</div>
<!-- FOOTER TOP SECTION END -->

<!-- FOOTER BOTTOM SECTION START -->
<div class="footer-bottom-section section">
	<div class="container">
		<div class="row">
            <!-- Copyright -->
			<div class="copyright text-left col-sm-6 col-xs-12">
				<p>Powered by <a href="https://hastech.company/">HasTech</a></p>
			</div>
			<!-- Payment Method -->
			<div class="footer-menu text-right col-sm-6 col-xs-12">
				<a href="#">Help & Support</a>
			</div>
		</div>
	</div>
</div>
<!-- FOOTER BOTTOM SECTION END -->
</div>
@endsection
