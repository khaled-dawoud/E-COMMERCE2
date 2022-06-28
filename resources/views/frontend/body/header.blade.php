<header>
    <!-- header left mobie -->
    <div class="header-mobile d-md-none">
        <div class="mobile hidden-md-up text-xs-center d-flex align-items-center justify-content-around">

            <!-- logo -->
            <div class="mobile-logo">
                <a href="home2.html">
                    <img class="logo-mobile img-fluid" src="{{ asset('frontend/img/home/logo-mobie.png') }}" alt="Prestashop_Furnitica">
                </a>
            </div>

            <!-- menu right -->
            <div class="mobile-menutop" data-target="#mobile-pagemenu">
                <i class="zmdi zmdi-more"></i>
            </div>
        </div>
    </div>

    <!-- header desktop -->
    <div class="header-top d-xs-none">
        <div class="row margin-0">

            <!-- menu -->
            <div class="d-flex icon-menu align-items-center justify-content-center">
                <i class="fa fa-bars" aria-hidden="true" id="icon-menu"></i>
            </div>
            <div class="main-menu d-flex align-items-center justify-content-start navbar-expand-md">
                <div class="menu navbar collapse navbar-collapse">
                    <ul class="menu-top navbar-nav">
                        <li class="nav-link">
                            <a href="/" class="parent">Home</a>
                            {{-- <div class="dropdown-menu">
                                <ul>
                                    <li class="item">
                                        <a href="index-2.html" title="Home Page 1">Home Page 1</a>
                                    </li>
                                    <li class="item">
                                        <a href="home2.html" title="Home Page 2">Home Page 2</a>
                                    </li>
                                    <li class="item">
                                        <a href="home3.html" title="Home Page 3">Home Page 3</a>
                                    </li>
                                    <li class="item">
                                        <a href="home4.html" title="Home Page 4">Home Page 4</a>
                                    </li>
                                    <li class="item">
                                        <a href="home5.html" title="Home Page 5">Home Page 5</a>
                                    </li>
                                </ul>
                            </div> --}}
                        </li>
                        <li>
                            <a href="#" class="parent">Portfolio</a>
                            {{-- <div class="dropdown-menu">
                                <ul>
                                    <li class="item">
                                        <a href="blog-list-sidebar-left.html" title="Blog List (Sidebar Left)">Blog List (Sidebar Left)</a>
                                    </li>
                                    <li class="item">
                                        <a href="blog-list-sidebar-left2.html" title="Blog List (Sidebar Left) 2">Blog List (Sidebar Left) 2</a>
                                    </li>
                                    <li class="item">
                                        <a href="blog-list-sidebar-right.html" title="Category Blog (Right column)">Blog List (Sidebar Right)</a>
                                    </li>
                                    <li class="item">
                                        <a href="blog-list-no-sidebar.html" title="Blog List (No Sidebar)">Blog List (No Sidebar)</a>
                                    </li>
                                    <li class="item">
                                        <a href="blog-grid-no-sidebar.html" title="Blog Grid (No Sidebar)">Blog Grid (No Sidebar)</a>
                                    </li>
                                    <li class="item">
                                        <a href="blog-detail.html" title="Blog Detail">Blog Detail</a>
                                    </li>
                                </ul>
                            </div> --}}
                        </li>
                        <li>
                            <a href="#" class="parent">Shop</a>
                            {{-- <div class="dropdown-menu drop-tab">
                                <ul>
                                    <li class="item container group">
                                        <div class="dropdown-menu dropdown-tab">
                                            <ul>
                                                <li class="item col-md-4 float-left">
                                                    <span class="menu-title">Category Style</span>
                                                    <div class="menu-content">
                                                        <ul class="col">
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Product Grid (Sidebar Left)</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-right.html">Product Grid (Sidebar Right)</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-list-sidebar-left.html">Product List (Sidebar left) </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="item col-md-4 html  float-left">
                                                    <span class="menu-title">Product Detail Style</span>
                                                    <div class="menu-content">
                                                        <ul>
                                                            <li>
                                                                <a href="product-detail.html">Product Detail (Sidebar Left)</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Product Detail (Sidebar Right)</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="item col-md-4 html  float-left">
                                                    <span class="menu-title">Bonus Page</span>
                                                    <div class="menu-content">
                                                        <ul>
                                                            <li>
                                                                <a href="404.html">404 Page</a>
                                                            </li>
                                                            <li>
                                                                <a href="about-us.html">About Us Page</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div> --}}
                        </li>
                        <li>
                            <a href="contact.html" class="parent">Contact US</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- logo -->
            <div class="flex-2 d-flex align-items-center justify-content-center mr-5">
                <div id="logo">
                    <a href="home2.html">
                        <img src="{{ asset('frontend/img/home/logo.png') }}" alt="logo">
                    </a>
                </div>
            </div>

            <!-- search and acount -->
            <div id="search_widget" class="d-flex align-items-center justify-content-end ml-5">
                {{-- <div class="search-header-top d-flex align-items-center justify-content-center">
                    <i class="search fa fa-search"></i>
                </div> --}}
                <div id="block_myaccount_infos">
                    <div class="myaccount-title hidden-sm-down dropdown d-flex align-items-center justify-content-center">
                        <a href="#acount" data-toggle="collapse" class="acount">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div id="acount" class="collapse">
                        <div class="account-list-content">
                            <div>
                                <a class="login" href="user-acount.html" rel="nofollow" title="Log in to your customer account">
                                    <i class="fa fa-cog"></i>
                                    <span>My Account</span>
                                </a>
                            </div>
                            <div>
                                <a class="login" href="user-login.html" rel="nofollow" title="Log in to your customer account">
                                    <i class="fa fa-sign-in"></i>
                                    <span>Sign in</span>
                                </a>
                            </div>
                            <div>
                                <a class="register" href="user-register.html" rel="nofollow" title="Register Account">
                                    <i class="fa fa-user"></i>
                                    <span>Register Account</span>
                                </a>
                            </div>
                            <div>
                                <a class="check-out" href="product-checkout.html" rel="nofollow" title="Checkout">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <span>Checkout</span>
                                </a>
                            </div>
                            <div>
                                <a href="user-wishlist.html" title="My Wishlists">
                                    <i class="fa fa-heart"></i>My Wishlists
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="desktop_cart d-flex align-items-center">
                    <div class="blockcart block-cart cart-preview tiva-toggle">
                        <div class="header-cart tiva-toggle-btn">
                            <span class="cart-products-count">1</span>
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <div class="dropdown-content">
                            <div class="cart-content">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="{{ asset('frontend/img/product/5.jpg') }}" alt="Product">
                                                </a>
                                            </td>
                                            <td>
                                                <div class="product-name">
                                                    <a href="product-detail.html">Organic Strawberry Fruits</a>
                                                </div>
                                                <div>
                                                    2 x
                                                    <span class="product-price">£28.98</span>
                                                </div>
                                            </td>
                                            <td class="action">
                                                <a class="remove" href="#">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="total">
                                            <td colspan="2">Total:</td>
                                            <td>£92.96</td>
                                        </tr>

                                        <tr>
                                            <td colspan="3" class="d-flex justify-content-center">
                                                <div class="cart-button">
                                                    <a href="product-cart.html" title="View Cart">View Cart</a>
                                                    <a href="product-checkout.html" title="Checkout">Checkout</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
