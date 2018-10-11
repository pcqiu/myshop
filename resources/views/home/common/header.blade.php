<header class="header-section section sticker">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- logo -->
                <div class="header-logo float-left">
                    {{--<a href="/"><img src="img/logo.png" alt="main logo"></a>--}}
                </div>
                <!-- header-search & total-cart -->
                <div class="float-right">
                    <div class="header-option-btns float-right">
                        <!-- header-search -->
                        <div class="header-search float-left">
                            <button class="search-toggle" data-toggle="dropdown"><i class="pe-7s-search"></i></button>
                            <div class="dropdown-menu header-search-form">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button><i class="fa fa-long-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- header Account -->
                        <div class="header-account float-left">
                            <ul>
                                <li>
                                    <a href="#" data-toggle="dropdown">
                                        <i class="pe-7s-config"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        @if(Auth::check())
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    Log Out
                                                </a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        @else
                                            <li><a href="{{route('login')}}">Log in</a></li>
                                        @endif
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="wishlist.html">Wish list</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- Header Cart -->
                        <div class="header-cart float-left">
                            <!-- Cart Toggle -->
                            <a class="cart-toggle" href="#" data-toggle="dropdown">
                                <i class="pe-7s-cart"></i>
                                <span>2</span>
                            </a>
                            <!-- Mini Cart Brief -->
                            <div class="mini-cart-brief dropdown-menu text-left">
                                <!-- Cart Products -->
                                <div class="all-cart-product clearfix">
                                    <div class="single-cart clearfix">
                                        <div class="cart-image">
                                            <a href="product-details.html"><img src="img/product/cart-1.jpg" alt=""></a>
                                        </div>
                                        <div class="cart-info">
                                            <h5><a href="product-details.html">Le Parc Minotti Chair</a></h5>
                                            <p>1 x £9.00</p>
                                            <a href="#" class="cart-delete" title="Remove this item"><i class="pe-7s-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="single-cart clearfix">
                                        <div class="cart-image">
                                            <a href="product-details.html"><img src="img/product/cart-2.jpg" alt=""></a>
                                        </div>
                                        <div class="cart-info">
                                            <h5><a href="product-details.html">DSR Eiffel chair</a></h5>
                                            <p>1 x £9.00</p>
                                            <a href="#" class="cart-delete" title="Remove this item"><i class="pe-7s-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Total -->
                                <div class="cart-totals">
                                    <h5>Total <span>£12.00</span></h5>
                                </div>
                                <!-- Cart Button -->
                                <div class="cart-bottom  clearfix">
                                    <a href="checkout.html">Check out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="main-menu menu-right float-right">
                        <ul>
                            <li class="active"><a href="index.blade.php">Home</a>
                                <ul class="sub-menu">
                                    <li class="active"><a href="index.blade.php">Home one</a></li>
                                    <li><a href="index-2.html">Home two</a></li>
                                    <li><a href="index-3.html">Home three</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.html">shop</a>
                                <ul class="sub-menu">
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="product-details.html">product details</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">cart</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="login.html">login</a></li>
                                    <li><a href="register.html">register</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-menu"></div>
            </div>
        </div>
    </div>
</header>