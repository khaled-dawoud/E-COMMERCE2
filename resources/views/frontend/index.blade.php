@extends('frontend.master')
@section('title' , 'Home' . ' | ' . env('APP_NAME'))
@section('content')

    <!-- main content -->
    <div class="main-content">
        <div class="wrap-banner">
            <!-- menu category -->
            <div class="menu-banner d-xs-none">
                <div class="tiva-verticalmenu block" data-count_showmore="17">
                    <div class="box-content block_content">
                        <div class="verticalmenu" role="navigation">
                            <ul class="menu level1">
                                @foreach ( $categories as $category)
                                <li class="item parent">
                                    <a href="{{ route('site.category', $category->id) }}" class="hasicon" title="SIDE TABLE">
                                        <img src="{{ asset('uploads/images/category/'.$category->image) }}" alt="img">{{ $category->name }}</a>
                                    {{-- <div class="dropdown-menu">
                                        <div class="menu-items">
                                            <ul>
                                                <li class="item">
                                                    <a href="#" title="Aliquam lobortis">Aliquam lobortis</a>
                                                </li>
                                                <li class="item parent-submenu parent">
                                                    <a href="#" title="Duis Reprehenderit">Duis Reprehenderit</a>
                                                    <span class="show-sub fa-active-sub"></span>
                                                    <div class="dropdown-submenu">
                                                        <div class="menu-items">
                                                            <ul>
                                                                <li class="item">
                                                                    <a href="#" title="Aliquam lobortis">Aliquam lobortis</a>
                                                                </li>
                                                                <li class="item">
                                                                    <a href="#" title="Duis Reprehenderit">Duis Reprehenderit</a>
                                                                </li>
                                                                <li class="item">
                                                                    <a href="#" title="Voluptate">Voluptate</a>
                                                                </li>
                                                                <li class="item">
                                                                    <a href="#" title="Tongue Est">Tongue Est</a>
                                                                </li>
                                                                <li class="item">
                                                                    <a href="#" title="Venison Andouille">Venison Andouille</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <a href="#" title="Voluptate">Voluptate</a>
                                                </li>
                                                <li class="item">
                                                    <a href="#" title="Tongue Est">Tongue Est</a>
                                                </li>
                                                <li class="item">
                                                    <a href="#" title="Venison Andouille">Venison Andouille</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                </li>
                                @endforeach
                                <li class="more item">Show More</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-center align-items-center header-top-left pull-left">
                            <div class="toggle-nav act">
                                <div class="btnov-lines-large">
                                    <i class="zmdi zmdi-close"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- main -->
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <section class="page-home">
                        <!-- SHOP THE LOOK -->
                        <div class="section spacing-10 groupbanner-special">
                            <div class="title-block">
                                <span>Shop The LookBook 2018</span>
                                <span>LookBook</span>
                                <span>HAND-PICKED ARRIVALS FROM THE BEST DESIGNER</span>
                            </div>

                            <div class="row">
                                <div class="lookbook owl-carousel owl-theme owl-loaded owl-drag">
                                    <div class="item">
                                        <!-- Module Lookbooks -->
                                        <div class="tiva-lookbook defaul">
                                            <div class="items col-lg-12 col-sm-12 col-xs-12">
                                                <div class="tiva-content-lookbook">
                                                    <img class="img-fluid img-responsive" src="{{ asset('frontend/img/home/home1-tolltip1.jpg') }}" alt="lookbook">

                                                    <div class="item-lookbook item1">
                                                        <span class="number-lookbook">+</span>
                                                        <div class="content-lookbook lookbook-custom">
                                                            <div class="main-lookbook d-flex align-items-center">
                                                                <div class="item-thumb">
                                                                    <a href="product-detail.html">
                                                                        <img src="{{ asset('frontend/img/home/icon-tolltip2.jpg') }}" alt="lorem-ipsum-dolor-sit-amet">
                                                                    </a>
                                                                </div>
                                                                <div class="content-bottom">
                                                                    <div class="item-title">
                                                                        <a href="product-detail.html">Lorem ipsum dolor</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        £52.00
                                                                    </div>
                                                                    <div class="readmore">
                                                                        <a href="product-detail.html">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item-lookbook item2">
                                                        <span class="number-lookbook">+</span>
                                                        <div class="content-lookbook">
                                                            <div class="main-lookbook d-flex align-items-center">
                                                                <div class="item-thumb">
                                                                    <a href="product-detail.html">
                                                                        <img src="{{ asset('frontend/img/home/icon-tolltip1.jpg') }}" alt="contrary-to-popular-belief">
                                                                    </a>
                                                                </div>
                                                                <div class="content-bottom">
                                                                    <div class="item-title">
                                                                        <a href="product-detail.html">Sed vel malesuada lorem</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        £68.00
                                                                    </div>
                                                                    <div class="readmore">
                                                                        <a href="product-detail.html">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <!-- Module Lookbooks -->
                                        <div class="tiva-lookbook default">
                                            <div class="items col-lg-12 col-sm-12 col-xs-12">
                                                <div class="tiva-content-lookbook">
                                                    <img class="img-fluid img-responsive" src="{{ asset('frontend/img/home/home1-tolltip2.jpg') }}" alt="lookbook">

                                                    <div class="item-lookbook item3">
                                                        <span class="number-lookbook">+</span>
                                                        <div class="content-lookbook">
                                                            <div class="main-lookbook d-flex align-items-center">
                                                                <div class="item-thumb">
                                                                    <a href="product-detail.html">
                                                                        <img src="{{ asset('frontend/img/home/icon-tolltip5.jpg') }}" alt="lorem-ipsum-dolor-sit-amet">
                                                                    </a>
                                                                </div>
                                                                <div class="content-bottom">
                                                                    <div class="item-title">
                                                                        <a href="product-detail.html">Lorem ipsum dolor sit</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        £45.00
                                                                    </div>
                                                                    <div class="readmore">
                                                                        <a href="product-detail.html">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item-lookbook item4">
                                                        <span class="number-lookbook">+</span>
                                                        <div class="content-lookbook">
                                                            <div class="main-lookbook d-flex align-items-center">
                                                                <div class="item-thumb">
                                                                    <a href="product-detail.html">
                                                                        <img src="{{ asset('frontend/img/home/icon-tolltip6.jpg') }}" alt="lorem-ipsum-dolor-sit-amet">
                                                                    </a>
                                                                </div>
                                                                <div class="content-bottom">
                                                                    <div class="item-title">
                                                                        <a href="product-detail.html">Lorem ipsum dolor</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        £21.00
                                                                    </div>
                                                                    <div class="readmore">
                                                                        <a href="product-detail.html">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item-lookbook item5">
                                                        <span class="number-lookbook">+</span>
                                                        <div class="content-lookbook lookbook-custom">
                                                            <div class="main-lookbook d-flex align-items-center">
                                                                <div class="item-thumb">
                                                                    <a href="product-detail.html">
                                                                        <img src="{{ asset('frontend/img/home/icon-tolltip4.jpg') }}" alt="mug-the-adventure-begins">
                                                                    </a>
                                                                </div>
                                                                <div class="content-bottom">
                                                                    <div class="item-title">
                                                                        <a href="product-detail.html">Sed vel malesuada lorem</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        £11.90
                                                                    </div>
                                                                    <div class="readmore">
                                                                        <a href="product-detail.html">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <!-- Module Lookbooks -->
                                        <div class="tiva-lookbook default">
                                            <div class="items col-lg-12 col-sm-12 col-xs-12">
                                                <div class="tiva-content-lookbook">
                                                    <img class="img-fluid img-responsive" src="{{ asset('frontend/img/home/home1-tolltip3.jpg') }}" alt="lookbook">

                                                    <div class="item-lookbook item6">
                                                        <span class="number-lookbook">+</span>
                                                        <div class="content-lookbook">
                                                            <div class="main-lookbook d-flex align-items-center">
                                                                <div class="item-thumb">
                                                                    <a href="product-detail.html">
                                                                        <img src="{{ asset('frontend/img/home/icon-tolltip4.jpg') }}" alt="mug-the-adventure-begins">
                                                                    </a>
                                                                </div>
                                                                <div class="content-bottom">
                                                                    <div class="item-title">
                                                                        <a href="product-detail.html">Sed vel malesuada lorem</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        £11.90
                                                                    </div>
                                                                    <div class="readmore">
                                                                        <a href="product-detail.html">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item-lookbook item7">
                                                        <span class="number-lookbook">+</span>
                                                        <div class="content-lookbook">
                                                            <div class="main-lookbook d-flex align-items-center">
                                                                <div class="item-thumb">
                                                                    <a href="product-detail.html">
                                                                        <img src="{{ asset('frontend/img/product/13.jpg') }}" alt="brown-bear-vector-graphics">
                                                                    </a>
                                                                </div>
                                                                <div class="content-bottom">
                                                                    <div class="item-title">
                                                                        <a href="product-detail.html">Orci varius natoque penatibus</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        £9.00
                                                                    </div>
                                                                    <div class="readmore">
                                                                        <a href="product-detail.html">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item-lookbook item8">
                                                        <span class="number-lookbook">+</span>
                                                        <div class="content-lookbook">
                                                            <div class="main-lookbook d-flex align-items-center">
                                                                <div class="item-thumb">
                                                                    <a href="product-detail.html">
                                                                        <img src="{{ asset('frontend/img/home/icon-tolltip6.jpg') }}" alt="lorem-ipsum-dolor-sit-amet">
                                                                    </a>
                                                                </div>
                                                                <div class="content-bottom">
                                                                    <div class="item-title">
                                                                        <a href="product-detail.html">Etiam congue nisl nec</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        £16.00
                                                                    </div>
                                                                    <div class="readmore">
                                                                        <a href="product-detail.html">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="info-lookbook">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- product living room -->
                        <div class="section living-room background-none">
                            <div class="container">
                                <div class="tiva-row-wrap row">
                                    <div class="col-md-12 col-xs-12 groupcategoriestab-vertical">
                                        <div class="grouptab">
                                            <div class="product-tab categoriestab-left flex-9">
                                                <div class="title-tab-content d-flex">
                                                    <!-- tab product -->
                                                    <div class="dropdown-toggle toggle-category tab-category-none">Select Category</div>
                                                    <ul class="nav nav-tabs wibkit row">
                                                        <li class="col-xs-6">
                                                            <a href="#all" data-toggle="tab" class="active">ALL PRODUCTS</a>
                                                        </li>
                                                        <li class="col-xs-6">
                                                            <a href="#table" data-toggle="tab">SIDE TABLE</a>
                                                        </li>
                                                        <li class="col-xs-6">
                                                            <a href="#armchair" data-toggle="tab">ARMCHAIR</a>
                                                        </li>
                                                        <li class="col-xs-6">
                                                            <a href="#cushion" data-toggle="tab">CUSHION</a>
                                                        </li>
                                                    </ul>

                                                    <!-- Sort by -->
                                                    <div class="filter-sortby open ">
                                                        <select>
                                                            <option value="">Sort by</option>
                                                            <option value="">Name, A to Z</option>
                                                            <option value="">Name, Z to A</option>
                                                            <option value="">Price, low to high</option>
                                                            <option value="">Price, high to low</option>
                                                        </select>

                                                        <div class="toggle-filter btn ml-3 dropdown-toggle" data-label="Filter" data-label-hidden="Hide Filter">Filter</div>
                                                        <div class="hide-filter toggle-filter btn" data-label="Filter" data-label-hidden="Hide Filter">
                                                            <i class="fa fa-times-circle" aria-hidden="true"></i>Hide Filter</div>
                                                    </div>
                                                </div>

                                                <!-- filter -->
                                                <div class="content-filter">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="tiva-filter-title d-flex align-items-center">
                                                                Choose Color
                                                            </div>
                                                            <ul class="active">
                                                                <li data-id_attribute="5">
                                                                    <span class="color grey"></span>
                                                                    <span>Grey</span>
                                                                </li>
                                                                <li data-id_attribute="6">
                                                                    <span class="color taupe"></span>
                                                                    <span>Taupe</span>
                                                                </li>
                                                                <li data-id_attribute="7">
                                                                    <span class="color beige"></span>
                                                                    <span>Beige</span>
                                                                </li>
                                                                <li data-id_attribute="9">
                                                                    <span class="color white"></span>
                                                                    <span>Off White</span>
                                                                </li>
                                                                <li data-id_attribute="10">
                                                                    <span class="color red"></span>
                                                                    <span>Red</span>
                                                                </li>
                                                                <li data-id_attribute="11">
                                                                    <span class="color black"></span>
                                                                    <span>Black</span>
                                                                </li>
                                                                <li data-id_attribute="12">
                                                                    <span class="color camel"></span>
                                                                    <span>Camel</span>
                                                                </li>
                                                                <li data-id_attribute="13">
                                                                    <span class="color orange"></span>
                                                                    <span>Orange</span>
                                                                </li>
                                                                <li data-id_attribute="14">
                                                                    <span class="color blue"></span>
                                                                    <span>Blue</span>
                                                                </li>
                                                                <li data-id_attribute="15">
                                                                    <span class="color green"></span>
                                                                    <span>Green</span>
                                                                </li>
                                                                <li data-id_attribute="16">
                                                                    <span class="color yellow"></span>
                                                                    <span>Yellow</span>
                                                                </li>
                                                                <li data-id_attribute="17">
                                                                    <span class="color brown"></span>
                                                                    <span>Brown</span>
                                                                </li>
                                                                <li data-id_attribute="18">
                                                                    <span class="color pink"></span>
                                                                    <span>Pink</span>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="tiva-filter-title d-flex align-items-center m-top">
                                                                Choose Manufacture
                                                            </div>
                                                            <ul class="manufacture filter_product list-unstyled active">
                                                                <li>Delce</li>
                                                                <li>Gabbana</li>
                                                                <li>Hermes</li>
                                                                <li>Hug Boss</li>
                                                                <li>Lorem Ipsum</li>
                                                                <li>louis vuitton</li>
                                                                <li>variations</li>
                                                                <li>Popular</li>
                                                                <li>Standard</li>
                                                                <li>Versace</li>
                                                            </ul>
                                                        </div>

                                                        <div class="tiva-filter-price col-md-4">
                                                            <div class="tiva-filter-title d-flex align-items-center m-top">
                                                                Choose Price
                                                            </div>
                                                            <div id="block_price_filter" class="block">
                                                                <div class="block-content">
                                                                    <div id="slider-range" class="tiva-filter">
                                                                        <div class="filter-itemprice-filter">
                                                                            <div class="layout-slider">
                                                                                <input id="price-filter" name="price" value="0;100" />
                                                                            </div>
                                                                            <div class="layout-slider-settings"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- tab product content -->
                                                <div class="tab-content">
                                                    <div id="all" class="tab-pane fade in active show">
                                                        <div class="item text-center row">
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/1.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/5.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/3.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/9.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/2.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/17.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/13.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/26.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content-showmore text-center has-showmore">
                                                            <button type="button" class="btn btn-default novShowMore" name="novShowMore" data-loading="Loading..." data-loadmore="Load More Products">
                                                                <span>Load More Products</span>
                                                            </button>
                                                            <input type="hidden" value="0" class="count_showmore">
                                                        </div>
                                                    </div>
                                                    <div id="table" class="tab-pane fade">
                                                        <div class="item text-center row">
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/1.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/2.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/3.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/4.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/5.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/6.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/7.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/8.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="content-showmore text-center has-showmore">
                                                            <button type="button" class="btn btn-default novShowMore" name="novShowMore" data-loading="Loading..." data-loadmore="Load More Products">
                                                                <span>Load More Products</span>
                                                            </button>
                                                            <input type="hidden" value="0" class="count_showmore">
                                                        </div>
                                                    </div>

                                                    <div id="armchair" class="tab-pane fade">
                                                        <div class="item text-center row">
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/9.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/10.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/11.jpg') }}" alt="img">

                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/12.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/12.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/13.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/14.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/15.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="content-showmore text-center has-showmore">
                                                            <button type="button" class="btn btn-default novShowMore" data-loading="Loading..." data-loadmore="Load More Products">
                                                                <span>Load More Products</span>
                                                            </button>
                                                            <input type="hidden" value="0" class="count_showmore">
                                                        </div>
                                                    </div>

                                                    <div id="cushion" class="tab-pane fade">
                                                        <div class="item text-center row">
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/1.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/2.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/3.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/4.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset('frontend/img/product/5.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset("frontend/img/product/6.jpg" )}}" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset("frontend/img/product/7.jpg") }}" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid" src="{{ asset("frontend/img/product/8.jpg") }}" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="content-showmore text-center has-showmore">
                                                            <button type="button" class="btn btn-default novShowMore" name="novShowMore" data-loading="Loading..." data-loadmore="Load More Products">
                                                                <span>Load More Products</span>
                                                            </button>
                                                            <input type="hidden" value="0" class="count_showmore">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- banner -->
                        <div class="section spacing-10 group-image-special">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 banner1">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid width-100" src="{{ asset("frontend/img/home/effect5.jpg") }}" alt="banner-1" title="banner-1">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 banner1">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid width-100" src="{{ asset("frontend/img/home/effect6.jpg") }}" alt="banner-2" title="banner-2">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 banner1">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid width-100" src="{{ asset("frontend/img/home/effect7.jpg") }}" alt="banner-2" title="banner-2">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 banner1">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid width-100" src="{{ asset("frontend/img/home/effect8.jpg") }}" alt="banner-2" title="banner-2">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 banner1">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid width-100" src="{{ asset("frontend/img/home/effect9.jpg") }}" alt="banner-2" title="banner-2">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="section new-arrivals col-lg-6 col-xs-6">
                                    <div class="tab-content">
                                        <div class="title-product">
                                            <h2>New Arrivals</h2>
                                            <p>Discover our new products</p>
                                        </div>
                                        <div class="category-product owl-carousel owl-theme owl-loaded owl-drag">
                                            <div class="item text-center">
                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                    <div class="thumbnail-container">
                                                        <a href="product-detail.html">
                                                            <img class="img-fluid image-cover" src="{{ asset("frontend/img/product/6.jpg") }}" alt="img">
                                                            <img class="img-fluid image-secondary" src="{{ asset("frontend/img/product/4.jpg") }}" alt="img">
                                                        </a>
                                                        <div class="product-flags discount">-30%</div>

                                                    </div>
                                                    <div class="product-description">
                                                        <div class="product-groups">
                                                            <div class="product-title">
                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-group-price">
                                                                <div class="product-price-and-shipping">
                                                                    <span class="price">£20.08</span>
                                                                    <del class="regular-price">£28.68</del>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-buttons d-flex justify-content-center">
                                                            <form action="#" method="post" class="formAddToCart">
                                                                <input type="hidden" name="token">
                                                                <input type="hidden" name="id_product" value="1">
                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                </a>
                                                            </form>
                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                            </a>
                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item text-center">
                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                    <div class="thumbnail-container">
                                                        <a href="product-detail.html">
                                                            <img class="img-fluid image-cover" src="{{ asset("frontend/img/product/10.jpg") }}" alt="img">
                                                            <img class="img-fluid image-secondary" src="{{ asset("frontend/img/product/11.jpg") }}" alt="img">
                                                        </a>
                                                        <div class="product-flags discount">-10%</div>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="product-groups">
                                                            <div class="product-title">
                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-group-price">
                                                                <div class="product-price-and-shipping">
                                                                    <span class="price">£20.08</span>
                                                                    <del class="regular-price">£28.68</del>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-buttons d-flex justify-content-center">
                                                            <form action="#" method="post" class="formAddToCart">
                                                                <input type="hidden" name="token">
                                                                <input type="hidden" name="id_product" value="1">
                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                </a>
                                                            </form>
                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                            </a>
                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item text-center">
                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                    <div class="thumbnail-container">
                                                        <a href="product-detail.html">
                                                            <img class="img-fluid image-cover" src="{{ asset("frontend/img/product/16.jpg") }}" alt="img">
                                                            <img class="img-fluid image-secondary" src="{{ asset("frontend/img/product/14.jpg") }}" alt="img">
                                                        </a>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="product-groups">
                                                            <div class="product-title">
                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-group-price">
                                                                <div class="product-price-and-shipping">
                                                                    <span class="price">£20.08</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-buttons d-flex justify-content-center">
                                                            <form action="#" method="post" class="formAddToCart">
                                                                <input type="hidden" name="token">
                                                                <input type="hidden" name="id_product" value="1">
                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                </a>
                                                            </form>
                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                            </a>
                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="section best-sellers col-lg-6 col-xs-6">
                                    <div class="tab-content">
                                        <div class="title-product">
                                            <h2>Best Sellers</h2>
                                            <p>Discover our best sellers</p>
                                        </div>
                                        <div class="category-product owl-carousel owl-theme owl-loaded owl-drag">
                                            <div class="item text-center">
                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                    <div class="thumbnail-container">
                                                        <a href="product-detail.html">
                                                            <img class="img-fluid image-cover" src="{{ asset("frontend/img/product/26.jpg") }}" alt="img">
                                                            <img class="img-fluid image-secondary" src="{{ asset("frontend/img/product/24.jpg") }}" alt="img">
                                                        </a>
                                                        <div class="product-flags discount">-30%</div>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="product-groups">
                                                            <div class="product-title">
                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-group-price">
                                                                <div class="product-price-and-shipping">
                                                                    <span class="price">£20.08</span>
                                                                    <del class="regular-price">£28.68</del>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-buttons d-flex justify-content-center">
                                                            <form action="#" method="post" class="formAddToCart">
                                                                <input type="hidden" name="token">
                                                                <input type="hidden" name="id_product" value="1">
                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                </a>
                                                            </form>
                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                            </a>
                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item text-center">
                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                    <div class="thumbnail-container">
                                                        <a href="product-detail.html">
                                                            <img class="img-fluid image-cover" src="{{ asset("frontend/img/product/13.jpg") }}" alt="img">
                                                            <img class="img-fluid image-secondary" src="{{ asset("frontend/img/product/14.jpg") }}" alt="img">
                                                        </a>
                                                        <div class="product-flags discount">-10%</div>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="product-groups">
                                                            <div class="product-title">
                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-group-price">
                                                                <div class="product-price-and-shipping">
                                                                    <span class="price">£20.08</span>
                                                                    <del class="regular-price">£28.68</del>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-buttons d-flex justify-content-center">
                                                            <form action="#" method="post" class="formAddToCart">
                                                                <input type="hidden" name="token">
                                                                <input type="hidden" name="id_product" value="1">
                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                </a>
                                                            </form>
                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                            </a>
                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item text-center">
                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                    <div class="thumbnail-container">
                                                        <a href="product-detail.html">
                                                            <img class="img-fluid image-cover" src="{{ asset("frontend/img/product/12.jpg") }}" alt="img">
                                                            <img class="img-fluid image-secondary" src="{{ asset("frontend/img/product/4.jpg") }}" alt="img">
                                                        </a>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="product-groups">
                                                            <div class="product-title">
                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-group-price">
                                                                <div class="product-price-and-shipping">
                                                                    <span class="price">£20.08</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-buttons d-flex justify-content-center">
                                                            <form action="#" method="post" class="formAddToCart">
                                                                <input type="hidden" name="token">
                                                                <input type="hidden" name="id_product" value="1">
                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                </a>
                                                            </form>
                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                            </a>
                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- newsletter -->
                        <div class="section newsletter">
                            <div class="container">
                                <div class="row">
                                    <div class="news-content">
                                        <div class="tiva-modules">
                                            <div class="block">
                                                <div class="title-block">Newsletter</div>
                                                <div class="sub-title">Sign up to our newsletter to get the latest articles, lookbooks voucher codes
                                                    direct to your inbox</div>
                                                <div class="block-newsletter">
                                                    <form action="#" method="post">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="email" value="" placeholder="Enter Your Email">
                                                            <span class="input-group-btn">
                                                                <button class="effect-btn btn btn-secondary" name="submitNewsletter" type="submit">
                                                                    <span>subscribe</span>
                                                                </button>
                                                            </span>
                                                        </div>
                                                        <input type="hidden" name="action" value="0">
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="block">
                                                <div class="social-content">
                                                    <div id="social-block">
                                                        <div class="social">
                                                            <ul class="list-inline mb-0 justify-content-end">
                                                                <li class="list-inline-item mb-0">
                                                                    <a href="#" target="_blank">
                                                                        <i class="fa fa-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <a href="#" target="_blank">
                                                                        <i class="fa fa-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <a href="#" target="_blank">
                                                                        <i class="fa fa-google"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item mb-0">
                                                                    <a href="#" target="_blank">
                                                                        <i class="fa fa-instagram"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Popup newsletter -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
@stop

