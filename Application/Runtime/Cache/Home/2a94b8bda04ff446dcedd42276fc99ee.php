<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>关于我们 || 广州瑞谱佳科技有限公司</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="/chikwong/NewRPJ/Public/img/favicon.ico">
    <!--All Css Here-->

	<!-- Ionicons Font CSS-->
    <link rel="stylesheet" href="/chikwong/NewRPJ/Public/css/ionicons.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/chikwong/NewRPJ/Public/css/font-awesome.min.css">

	<!-- Animate CSS-->
	<link rel="stylesheet" href="/chikwong/NewRPJ/Public/css/animate.css">
	<!-- Owl Carousel CSS-->
	<link rel="stylesheet" href="/chikwong/NewRPJ/Public/css/owl.carousel.min.css">
	<!-- Nice Select CSS-->
	<link rel="stylesheet" href="/chikwong/NewRPJ/Public/css/nice-select.css">
	<!-- Slick CSS-->
	<link rel="stylesheet" href="/chikwong/NewRPJ/Public/css/slick.css">
	<!-- Meanmenu CSS-->
	<link rel="stylesheet" href="/chikwong/NewRPJ/Public/css/meanmenu.min.css">
	<!-- Venobox CSS-->
	<link rel="stylesheet" href="/chikwong/NewRPJ/Public/css/venobox.css">
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="/chikwong/NewRPJ/Public/css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="/chikwong/NewRPJ/Public/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="/chikwong/NewRPJ/Public/css/responsive.css">
	<!-- Modernizr Js -->
	<script src="/chikwong/NewRPJ/Public/scripts/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>


	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<div class="wrapper">
		<!--Header Area Start-->
		<header>
		    <!--Header Top Area Start-->
		    <div class="header-top-area">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-6">
		                    <!--Header Top Left Start-->
		                    <div class="header-top-left">
		                        <a href="#">广州瑞谱佳，欢迎您！</a>
		                    </div>
		                    <!--Header Top Left End-->
		                </div>

		            </div>
		        </div>
		    </div>
		    <!--Header Top Area End-->
		    <!--Header Middle Area Start-->
		    <div class="header-middle-area header-sticky">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-3">
		                    <!--Logo Start-->
		                    <div class="logo">
		                        <a href="index.html">
															<img src="/chikwong/NewRPJ/Public<?php echo ($company["logo"]); ?>" alt="">
		                        </a>
		                    </div>
		                    <!--Logo End-->
		                </div>
		                <div class="col-md-9">
		                    <!--Header Menu Start-->
		                    <div class="header-menu-area">
		                        <nav>
		                            <ul class="main-menu">
		                                <li class="active"><a href="index.html">主页</a>
		                                    <!--Dropdown Menu Start-->

		                                    <!--Dropdown Menu End-->
		                                </li>

		                                <!-- <li><a href="shop.html">产品</a></li> -->

		                                <!-- <li><a href="blog.html">Blog</a></li> -->
		                                <li><a href="#">产品</a>
		                                    <!--Mega Menu Start-->
		                                    <ul class="mega-menu">
																							<?php if(is_array($brands)): foreach($brands as $key=>$brd_list): ?><li><a href="#" class="item-link"><?php echo ($brd_list["brand_name"]); ?></a>
		                                                <ul>
																											<?php if(is_array($product)): foreach($product as $key=>$pro_list): if($brd_list['brand_id'] == $pro_list['brand_id']): ?><li><a href="my-account.html"><?php echo ($pro_list["product_name"]); ?></a></li><?php endif; endforeach; endif; ?>
                                                    </ul>
		                                            </li><?php endforeach; endif; ?>
		                                        </ul>
		                                    <!--Mega Menu End-->
		                                </li>
																		<li><a href="index.html">产品附件下载</a></li>
																	  <li><a href="about.html">关于我们</a></li>
		                            </ul>
		                        </nav>
		                    </div>
		                    <!--Header Menu End-->
		                    <div class="header-phone">
		                        <p>联系我们: <br><span><?php echo ($company["tel"]); ?></span></p>
		                    </div>
		                </div>
		            </div>
		            <div class="row">
                        <div class="col-12">
                            <!--Mobile Menu Area Start-->
                            <div class="mobile-menu d-lg-none"></div>
                            <!--Mobile Menu Area End-->
                        </div>
                    </div>
		        </div>
		    </div>
		    <!--Header Middle Area End-->
		    <!--Header Bottom Area Start-->
		    <div class="header-bottom-area pb-15">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 col-lg-3 order-lg-1 order-3">
                            <!--Category Menu Start-->
		                    <div class="category-menu category-menu-hidden">
                                <div class="category-heading">
                                    <h2 class="categories-toggle"><span>产品类别</span><i class="ion-ios-arrow-down"></i></h2>
                                </div>
                                <div id="cate-toggle" class="category-menu-list">
																		<?php if(is_array($category)): foreach($category as $key=>$cat_list): ?><ul>
	                                        <li class="right-menu"><a href="shop.html"><?php echo ($cat_list["category_name"]); ?></a>
																						  <?php if(is_array($brand)): foreach($brand as $key=>$brand_list): if($cat_list['category_id'] == $brand_list['category_id']): ?><ul class="cat-mega-menu">
		                                                <li class="right-menu cat-mega-title">
		                                                   <a href="shop.html"><?php echo ($brand_list["brand_name"]); ?></a>
		                                                    <ul>
																													<?php if(is_array($product)): foreach($product as $key=>$pro_list): if(($pro_list['category_id']=$cat_list['category_id']) and ($pro_list['brand_id']=$brand_list['brand_id'])): ?><li><a href="shop.html"><?php echo ($pro_list["product_name"]); ?></a></li><?php endif; endforeach; endif; ?>
		                                                    </ul>
		                                                </li>
		                                            </ul><?php endif; endforeach; endif; ?>
	                                        </li>
	                                    </ul><?php endforeach; endif; ?>
                                </div>
                            </div>
                            <!--Category Menu End-->
		                </div>
		                <div class="col-md-9 col-lg-6 order-lg-2 order-1">
		                    <!--Header Top Search Start-->
		                    <div class="header-top-search">
                                <div class="search-categories">
                                    <form action="#">
                                        <div class="search-form-input">
                                            <select id="select" name="select" class="nice-select">
                                                <option value="">全部类别</option>
																								<?php if(is_array($category)): foreach($category as $key=>$list): ?><option value="<?php echo ($list["category_id"]); ?>"><?php echo ($list["category_name"]); ?></option><?php endforeach; endif; ?>
                                            </select>
                                            <input type="text" placeholder="搜索你需要得产....">
                                            <button class="top-search-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                                        </div>
                                    </form>
                                </div>
		                    </div>
		                    <!--Header Top Search End-->
		                </div>
		                <div class="col-md-3 col-lg-3 order-lg-3 order-2">

		                </div>
		            </div>
		        </div>
		    </div>
		    <!--Header Bottom Area End-->
		</header>
		<!--Header Area End-->
		<!--Slider Area Start-->
		<div class="slider-area">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-3 d-md-none col-lg-3 d-lg-block"></div>
		            <div class="col-md-8 col-lg-6">
		                <div class="hero-slider owl-carousel">
                            <!--Single Slider Start-->
                            <div class="single-slider" style="background-image: url(/chikwong/NewRPJ/Public/img/slider/home1-slider-1.jpg)">
                                <div class="hero-slider-content">
                                    <h2 class="slow-animation1">pendant lights</h2>
                                    <h2 class="slow-animation2">collection 2018</h2>
                                    <h4>get up to</h4>
                                    <h1>30% off</h1>
                                    <div class="slider-btn mt-50">
                                        <a href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <!--Single Slider End-->
                            <!--Single Slider Start-->
                            <div class="single-slider" style="background-image: url(/chikwong/NewRPJ/Public/img/slider/home1-slider-2.jpg)">
                                <div class="hero-slider-content">
                                    <h2 class="slow-animation1">Beat solo2</h2>
                                    <h2 class="slow-animation2">wireless</h2>
                                    <h4>get up to</h4>
                                    <h1>60% off</h1>
                                    <div class="slider-btn mt-50">
                                        <a href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <!--Single Slider End-->
                        </div>
		            </div>
		            <div class="col-md-4 col-lg-3">
		                <!--Sidebar Product Categories Start-->
		                <div class="sidebar-product-categori">
		                    <div class="sidebar-cate-title">
		                        <h2>Our Categories</h2>
		                    </div>
		                    <div class="categori-block-content owl-carousel">
		                        <div class="item-listcategories">
		                            <!--Single List Categories Start-->
		                            <div class="list-categories">
		                                <div class="desc-listcategoreis">
		                                    <div class="name-categoreis">
		                                       <a href="shop.html">Fashion</a>
		                                    </div>
		                                    <div class="view-more">
		                                        <a href="#">Buy Now</a>
		                                    </div>
		                                </div>
		                                <div class="thumb-category">
		                                    <a href="shop.html"><img src="/chikwong/NewRPJ/Public/img/product-thumb/product-thumb1.jpg" alt=""></a>
		                                </div>
		                            </div>
		                            <!--Single List Categories End-->
		                            <!--Single List Categories Start-->
		                            <div class="list-categories">
		                                <div class="desc-listcategoreis">
		                                    <div class="name-categoreis">
		                                       <a href="shop.html">Furniture</a>
		                                    </div>
		                                    <div class="view-more">
		                                        <a href="#">Buy Now</a>
		                                    </div>
		                                </div>
		                                <div class="thumb-category">
		                                    <a href="shop.html"><img src="/chikwong/NewRPJ/Public/img/product-thumb/product-thumb2.jpg" alt=""></a>
		                                </div>
		                            </div>
		                            <!--Single List Categories End-->
		                            <!--Single List Categories Start-->
		                            <div class="list-categories">
		                                <div class="desc-listcategoreis">
		                                    <div class="name-categoreis">
		                                       <a href="shop.html">Electronics</a>
		                                    </div>
		                                    <div class="view-more">
		                                        <a href="#">Buy Now</a>
		                                    </div>
		                                </div>
		                                <div class="thumb-category">
		                                    <a href="shop.html"><img src="/chikwong/NewRPJ/Public/img/product-thumb/product-thumb3.jpg" alt=""></a>
		                                </div>
		                            </div>
		                            <!--Single List Categories End-->
		                        </div>
		                        <div class="item-listcategories">
		                            <!--Single List Categories Start-->
		                            <div class="list-categories">
		                                <div class="desc-listcategoreis">
		                                    <div class="name-categoreis">
		                                       <a href="shop.html">Cosmetic</a>
		                                    </div>
		                                    <div class="view-more">
		                                        <a href="#">Buy Now</a>
		                                    </div>
		                                </div>
		                                <div class="thumb-category">
		                                    <a href="shop.html"><img src="/chikwong/NewRPJ/Public/img/product-thumb/product-thumb4.jpg" alt=""></a>
		                                </div>
		                            </div>
		                            <!--Single List Categories End-->
		                            <!--Single List Categories Start-->
		                            <div class="list-categories">
		                                <div class="desc-listcategoreis">
		                                    <div class="name-categoreis">
		                                       <a href="shop.html">Computer & Laptop</a>
		                                    </div>
		                                    <div class="view-more">
		                                        <a href="#">Buy Now</a>
		                                    </div>
		                                </div>
		                                <div class="thumb-category">
		                                    <a href="shop.html"><img src="/chikwong/NewRPJ/Public/img/product-thumb/product-thumb5.jpg" alt=""></a>
		                                </div>
		                            </div>
		                            <!--Single List Categories End-->
		                        </div>
		                    </div>
		                </div>
		                <!--Sidebar Product Categories Start-->
		            </div>
		        </div>
		        <div class="banner-slide mt-30">
		            <div class="banner-inner">
		                <a href="#"><img class="d-lg-block d-md-block d-none" src="/chikwong/NewRPJ/Public/img/banner/slider-banner.jpg" alt=""> <img class="d-block d-md-none d-lg-none" src="img/banner/slider-banner1.png" alt=""></a>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Slider Area End-->
		<!--Banner Area Start-->
		<div class="banner-area mt-80">
		    <div class="container">
		        <div class="banner-items">
		            <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <!--Single Banner Item Start-->
                            <div class="single-banner-item mb-20">
                                <div class="banner-inner">
                                    <a href="#"><img src="/chikwong/NewRPJ/Public/img/offer/offer1.jpg" alt=""></a>
                                </div>
                                <div class="banner-content">
                                    <span class="name">Living Room Sale</span>
                                    <p class="price-sale">Up to <span class="text">75% off</span></p>
                                </div>
                            </div>
                            <!--Single Banner Item End-->
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <!--Single Banner Item Start-->
                            <div class="single-banner-item mb-20">
                                <div class="banner-inner">
                                    <a href="#"><img src="/chikwong/NewRPJ/Public/img/offer/offer2.jpg" alt=""></a>
                                </div>
                                <div class="banner-content">
                                    <span class="name">Makeup Combos Collection</span>
                                    <p class="price-sale">Up to <span class="text">75% off</span></p>
                                </div>
                            </div>
                            <!--Single Banner Item End-->
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <!--Single Banner Item Start-->
                            <div class="single-banner-item mb-20">
                                <div class="banner-inner">
                                    <a href="#"><img src="/chikwong/NewRPJ/Public/img/offer/offer3.jpg" alt=""></a>
                                </div>
                                <div class="banner-content">
                                    <span class="name">Sports Action Camera on Sale</span>
                                    <p class="price-sale">Up to <span class="text">75% off</span></p>
                                </div>
                            </div>
                            <!--Single Banner Item End-->
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <!--Single Banner Item Start-->
                            <div class="single-banner-item mb-20">
                                <div class="banner-inner">
                                    <a href="#"><img src="/chikwong/NewRPJ/Public/img/offer/offer4.jpg" alt=""></a>
                                </div>
                                <div class="banner-content">
                                    <span class="name">Fashion Coolest Men's</span>
                                    <p class="price-sale">Up to <span class="text">75% off</span></p>
                                </div>
                            </div>
                            <!--Single Banner Item End-->
                        </div>
                    </div>
		        </div>
		    </div>
		</div>
		<!--Banner Area End-->
		<!--Product Area Start-->
		<div class="product-area mt-80">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <!--Section Title Start-->
		                <div class="section-title">
		                    <h2>bestsellers</h2>
		                </div>
		                <!--Section Title End-->
		            </div>
		        </div>
		        <div class="product-block-content">
		            <div class="row">
                        <div class="bestsellerSlide pdr-0 owl-carousel">
                            <div class="col-md-12">
                                <!--Single Product Start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product1.jpg" alt="">
                                            <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product2.jpg" alt="">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="product-action">
                                            <ul>
                                                <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="single-product.html">The North Face Men's</a></h4>
                                        <div class="product-price">
                                            <span class="price">$80.00</span>
                                        </div>
                                        <div class="product-reviews">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                            <div class="col-md-12">
                                <!--Single Product Start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product3.jpg" alt="">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="product-action">
                                            <ul>
                                                <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="single-product.html">Lipstick Ultra Violet</a></h4>
                                        <div class="product-price">
                                            <span class="price">$180.00</span>
                                        </div>
                                        <div class="product-reviews">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                            <div class="col-md-12">
                                <!--Single Product Start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product4.jpg" alt="">
                                            <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product5.jpg" alt="">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="product-action">
                                            <ul>
                                                <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="single-product.html">Bedding Jigsaw Quilted</a></h4>
                                        <div class="product-price">
                                            <span class="price">$250.00</span>
                                        </div>
                                        <div class="product-reviews">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                            <div class="col-md-12">
                                <!--Single Product Start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product6.jpg" alt="">
                                            <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product7.jpg" alt="">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="product-action">
                                            <ul>
                                                <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="single-product.html">Adams Men's Dunbar</a></h4>
                                        <div class="product-price">
                                            <span class="regular-price">$400.00</span>
                                            <span class="price">$320.00</span>
                                        </div>
                                        <div class="product-reviews">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                            <div class="col-md-12">
                                <!--Single Product Start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product6.jpg" alt="">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="product-action">
                                            <ul>
                                                <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="single-product.html">The North Face Men's</a></h4>
                                        <div class="product-price">
                                            <span class="price">$350.00</span>
                                        </div>
                                        <div class="product-reviews">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                            <div class="col-md-12">
                                <!--Single Product Start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product8.jpg" alt="">
                                            <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product9.jpg" alt="">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="product-action">
                                            <ul>
                                                <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="single-product.html">Versace Bright Crystal</a></h4>
                                        <div class="product-price">
                                            <span class="price">$260.00</span>
                                        </div>
                                        <div class="product-reviews">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                            <div class="col-md-12">
                                <!--Single Product Start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product10.jpg" alt="">
                                            <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product11.jpg" alt="">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="product-action">
                                            <ul>
                                                <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="single-product.html">The North Face Men's</a></h4>
                                        <div class="product-price">
                                            <span class="regular-price">$60.00</span>
                                            <span class="price">$54.00</span>
                                        </div>
                                        <div class="product-reviews">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                            <div class="col-md-12">
                                <!--Single Product Start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product11.jpg" alt="">
                                            <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product12.jpg" alt="">
                                        </a>
                                        <span class="sticker">New</span>
                                        <div class="product-action">
                                            <ul>
                                                <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="single-product.html">Columbia Men's Ascender</a></h4>
                                        <div class="product-price">
                                            <span class="price">$36.00</span>
                                        </div>
                                        <div class="product-reviews">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                        </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Product Area End-->
		<!--Banner Area Start-->
		<div class="banner-area mt-80">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <div class="banner-inner">
                            <a href="#"><img src="/chikwong/NewRPJ/Public/img/banner/offer-banner1.jpg" alt=""></a>
                        </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Banner Area End-->
		<!--Categorie Product Area Start-->
		<div class="categorie-product-area mt-80">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <!--Section Title Start-->
		                <div class="section-title float-left">
		                    <h2>Fashion</h2>
		                </div>
		                <!--Section Title End-->
		                <!--Product Slider Nav-->
		                <div class="cate-slider-nav float-right">
		                    <button class="nav-prev"><i class="fa fa-angle-left"></i></button>
		                    <button class="nav-next"><i class="fa fa-angle-right"></i></button>
		                </div>
		                <!--Product Slider Nav-->
		            </div>
		        </div>
		        <div class="cate-product-wrapper">
		           <div class="row">
                        <div class="col-md-12 col-lg-3">
                            <!--Product Categorie Start-->
                            <div class="product-categorie">
                                <!--Categorie Filter Toggle-->
                                <button class="product-tab-filter-toggle">categories: <span>all</span><i class="ion-chevron-down"></i></button>
                                <!--Categorie Filter Toggle-->
                                <ul class="cate-filter">
                                    <li><a href="shop.html">Fashion</a></li>
                                    <li><a href="shop.html">Furniture</a></li>
                                    <li><a href="shop.html">Electronics</a></li>
                                    <li><a href="shop.html">Cosmetic</a></li>
                                    <li><a href="shop.html">Computer & Laptop</a></li>
                                    <li><a href="shop.html">Game Consoles</a></li>
                                    <li><a href="shop.html">Cosmetic</a></li>
                                    <li><a href="shop.html">Accessories</a></li>
                                </ul>
                            </div>
                            <!--Product Categorie Start-->
                        </div>
                        <div class="col-md-12 col-lg-9">
                            <!--Product Banner Start-->
                            <div class="banner-block-content">
                                <div class="banner-inner">
                                    <a href="#"><img src="/chikwong/NewRPJ/Public/img/banner/product-banner1.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categorie-product-block-content">
                        <div class="row">
                            <div class="cate-product-slide owl-carousel">
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product8.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product1.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Versace Bright Crystal</a></h4>
                                            <div class="product-price">
                                                <span class="price">$260.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product13.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product8.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Vera Wang Princess</a></h4>
                                            <div class="product-price">
                                                <span class="price">$120.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product10.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product11.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">The North Face Men's</a></h4>
                                            <div class="product-price">
                                                <span class="regular-price">$60.00</span>
                                                <span class="price">$54.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product15.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product16.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Merax Stylish Accent</a></h4>
                                            <div class="product-price">
                                                <span class="price">$90.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product17.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product18.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Makeup Brushes Set</a></h4>
                                            <div class="product-price">
                                                <span class="price">$320.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product3.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Lipstick Ultra Violet</a></h4>
                                            <div class="product-price">
                                                <span class="price">$180.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product13.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product14.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Enriched Nail Polish</a></h4>
                                            <div class="product-price">
                                                <span class="price">$300.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product6.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Dwar Men's Casual Long</a></h4>
                                            <div class="product-price">
                                                <span class="price">$350.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
		</div>
		<!--Categorie Product Area End-->
		<!--Categorie Product Area Start-->
		<div class="categorie-product-area mt-80">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <!--Section Title Start-->
		                <div class="section-title float-left">
		                    <h2>Furniture</h2>
		                </div>
		                <!--Section Title End-->
		                <!--Product Slider Nav-->
		                <div class="cate-slider-nav float-right">
		                    <button class="nav-prev"><i class="fa fa-angle-left"></i></button>
		                    <button class="nav-next"><i class="fa fa-angle-right"></i></button>
		                </div>
		                <!--Product Slider Nav-->
		            </div>
		        </div>
		        <div class="cate-product-wrapper">
		           <div class="row">
                        <div class="col-md-12 col-lg-3">
                            <!--Product Categorie Start-->
                            <div class="product-categorie">
                                <!--Categorie Filter Toggle-->
                                <button class="product-tab-filter-toggle">categories: <span>all</span><i class="ion-chevron-down"></i></button>
                                <!--Categorie Filter Toggle-->
                                <ul class="cate-filter">
                                    <li><a href="shop.html">Fashion</a></li>
                                    <li><a href="shop.html">Furniture</a></li>
                                    <li><a href="shop.html">Electronics</a></li>
                                    <li><a href="shop.html">Cosmetic</a></li>
                                    <li><a href="shop.html">Computer & Laptop</a></li>
                                    <li><a href="shop.html">Game Consoles</a></li>
                                    <li><a href="shop.html">Cosmetic</a></li>
                                    <li><a href="shop.html">Accessories</a></li>
                                </ul>
                            </div>
                            <!--Product Categorie Start-->
                        </div>
                        <div class="col-md-12 col-lg-9">
                            <!--Product Banner Start-->
                            <div class="banner-block-content">
                                <div class="banner-inner">
                                    <a href="#"><img src="/chikwong/NewRPJ/Public/img/banner/product-banner2.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categorie-product-block-content">
                        <div class="row">
                            <div class="cate-product-slide owl-carousel">
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product8.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product1.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Versace Bright Crystal</a></h4>
                                            <div class="product-price">
                                                <span class="price">$260.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product13.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product8.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Vera Wang Princess</a></h4>
                                            <div class="product-price">
                                                <span class="price">$120.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product10.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product11.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">The North Face Men's</a></h4>
                                            <div class="product-price">
                                                <span class="regular-price">$60.00</span>
                                                <span class="price">$54.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product15.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product16.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Merax Stylish Accent</a></h4>
                                            <div class="product-price">
                                                <span class="price">$90.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product17.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product18.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Makeup Brushes Set</a></h4>
                                            <div class="product-price">
                                                <span class="price">$320.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product3.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Lipstick Ultra Violet</a></h4>
                                            <div class="product-price">
                                                <span class="price">$180.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product13.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product14.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Enriched Nail Polish</a></h4>
                                            <div class="product-price">
                                                <span class="price">$300.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product6.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Dwar Men's Casual Long</a></h4>
                                            <div class="product-price">
                                                <span class="price">$350.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
		</div>
		<!--Categorie Product Area End-->
		<!--Categorie Product Area Start-->
		<div class="categorie-product-area mt-80">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <!--Section Title Start-->
		                <div class="section-title float-left">
		                    <h2>Electronics</h2>
		                </div>
		                <!--Section Title End-->
		                <!--Product Slider Nav-->
		                <div class="cate-slider-nav float-right">
		                    <button class="nav-prev"><i class="fa fa-angle-left"></i></button>
		                    <button class="nav-next"><i class="fa fa-angle-right"></i></button>
		                </div>
		                <!--Product Slider Nav-->
		            </div>
		        </div>
		        <div class="cate-product-wrapper">
		           <div class="row">
                        <div class="col-md-12 col-lg-3">
                            <!--Product Categorie Start-->
                            <div class="product-categorie">
                                <!--Categorie Filter Toggle-->
                                <button class="product-tab-filter-toggle">categories: <span>all</span><i class="ion-chevron-down"></i></button>
                                <!--Categorie Filter Toggle-->
                                <ul class="cate-filter">
                                    <li><a href="shop.html">Fashion</a></li>
                                    <li><a href="shop.html">Furniture</a></li>
                                    <li><a href="shop.html">Electronics</a></li>
                                    <li><a href="shop.html">Cosmetic</a></li>
                                    <li><a href="shop.html">Computer & Laptop</a></li>
                                    <li><a href="shop.html">Game Consoles</a></li>
                                    <li><a href="shop.html">Cosmetic</a></li>
                                    <li><a href="shop.html">Accessories</a></li>
                                </ul>
                            </div>
                            <!--Product Categorie Start-->
                        </div>
                        <div class="col-md-12 col-lg-9">
                            <!--Product Banner Start-->
                            <div class="banner-block-content">
                                <div class="banner-inner">
                                    <a href="#"><img src="/chikwong/NewRPJ/Public/img/banner/product-banner3.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categorie-product-block-content">
                        <div class="row">
                            <div class="cate-product-slide owl-carousel">
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product8.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product1.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Versace Bright Crystal</a></h4>
                                            <div class="product-price">
                                                <span class="price">$260.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product13.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product8.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Vera Wang Princess</a></h4>
                                            <div class="product-price">
                                                <span class="price">$120.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product10.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product11.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">The North Face Men's</a></h4>
                                            <div class="product-price">
                                                <span class="regular-price">$60.00</span>
                                                <span class="price">$54.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product15.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product16.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Merax Stylish Accent</a></h4>
                                            <div class="product-price">
                                                <span class="price">$90.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product17.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product18.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Makeup Brushes Set</a></h4>
                                            <div class="product-price">
                                                <span class="price">$320.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product3.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Lipstick Ultra Violet</a></h4>
                                            <div class="product-price">
                                                <span class="price">$180.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product13.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product14.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Enriched Nail Polish</a></h4>
                                            <div class="product-price">
                                                <span class="price">$300.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product6.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Dwar Men's Casual Long</a></h4>
                                            <div class="product-price">
                                                <span class="price">$350.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
		</div>
		<!--Categorie Product Area End-->
		<!--Categorie Product Area Start-->
		<div class="categorie-product-area mt-80">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <!--Section Title Start-->
		                <div class="section-title float-left">
		                    <h2>Cosmetic</h2>
		                </div>
		                <!--Section Title End-->
		                <!--Product Slider Nav-->
		                <div class="cate-slider-nav float-right">
		                    <button class="nav-prev"><i class="fa fa-angle-left"></i></button>
		                    <button class="nav-next"><i class="fa fa-angle-right"></i></button>
		                </div>
		                <!--Product Slider Nav-->
		            </div>
		        </div>
		        <div class="cate-product-wrapper">
		           <div class="row">
                        <div class="col-md-12 col-lg-3">
                            <!--Product Categorie Start-->
                            <div class="product-categorie">
                                <!--Categorie Filter Toggle-->
                                <button class="product-tab-filter-toggle">categories: <span>all</span><i class="ion-chevron-down"></i></button>
                                <!--Categorie Filter Toggle-->
                                <ul class="cate-filter">
                                    <li><a href="shop.html">Fashion</a></li>
                                    <li><a href="shop.html">Furniture</a></li>
                                    <li><a href="shop.html">Electronics</a></li>
                                    <li><a href="shop.html">Cosmetic</a></li>
                                    <li><a href="shop.html">Computer & Laptop</a></li>
                                    <li><a href="shop.html">Game Consoles</a></li>
                                    <li><a href="shop.html">Cosmetic</a></li>
                                    <li><a href="shop.html">Accessories</a></li>
                                </ul>
                            </div>
                            <!--Product Categorie Start-->
                        </div>
                        <div class="col-md-12 col-lg-9">
                            <!--Product Banner Start-->
                            <div class="banner-block-content">
                                <div class="banner-inner">
                                    <a href="#"><img src="/chikwong/NewRPJ/Public/img/banner/product-banner4.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categorie-product-block-content">
                        <div class="row">
                            <div class="cate-product-slide owl-carousel">
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product8.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product1.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Versace Bright Crystal</a></h4>
                                            <div class="product-price">
                                                <span class="price">$260.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product13.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product8.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Vera Wang Princess</a></h4>
                                            <div class="product-price">
                                                <span class="price">$120.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product10.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product11.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">The North Face Men's</a></h4>
                                            <div class="product-price">
                                                <span class="regular-price">$60.00</span>
                                                <span class="price">$54.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product15.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product16.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Merax Stylish Accent</a></h4>
                                            <div class="product-price">
                                                <span class="price">$90.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product17.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product18.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Makeup Brushes Set</a></h4>
                                            <div class="product-price">
                                                <span class="price">$320.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product3.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Lipstick Ultra Violet</a></h4>
                                            <div class="product-price">
                                                <span class="price">$180.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product13.jpg" alt="">
                                                <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product14.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Enriched Nail Polish</a></h4>
                                            <div class="product-price">
                                                <span class="price">$300.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Single Product Start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img class="first-img" src="/chikwong/NewRPJ/Public/img/product/product6.jpg" alt="">
                                            </a>
                                            <span class="sticker">New</span>
                                            <div class="product-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="single-product.html">Dwar Men's Casual Long</a></h4>
                                            <div class="product-price">
                                                <span class="price">$350.00</span>
                                            </div>
                                            <div class="product-reviews">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Product End-->
                                </div>
                            </div>
                        </div>
                    </div>
		        </div>
		    </div>
		</div>
		<!--Categorie Product Area End-->
		<!-- Brand Area Start -->
		<div class="brand-area mt-80">
		    <div class="container">
                <div class="brand-block-content">
                    <div class="row">
		            <div class="col-12">
		                <div class="brand-active owl-carousel">
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="/chikwong/NewRPJ/Public/img/brand/brand1.jpg" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="/chikwong/NewRPJ/Public/img/brand/brand2.jpg" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="/chikwong/NewRPJ/Public/img/brand/brand3.jpg" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="/chikwong/NewRPJ/Public/img/brand/brand4.jpg" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="/chikwong/NewRPJ/Public/img/brand/brand5.jpg" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="/chikwong/NewRPJ/Public/img/brand/brand2.jpg" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="/chikwong/NewRPJ/Public/img/brand/brand1.jpg" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                    <!--Single Brand Start-->
		                    <div class="single-brand">
		                      <a href="#"><img src="/chikwong/NewRPJ/Public/img/brand/brand4.jpg" alt=""></a>
		                    </div>
		                    <!--Single Brand End-->
		                </div>
		            </div>
		        </div>
                </div>
		    </div>
		</div>
		<!-- Brand Area End -->

		<!--Feature Area End-->
		<div class="feature-area">
				<div class="container">
						<div class="row">
								<div class="col-md-4">
										<!--Single Feature Start-->
										<div class="single-feature">
												<div class="feature-icon">
														<i class="icon ion-ios-telephone"></i>
												</div>
												<div class="feature-content">
														<h3><?php echo ($company["tel"]); ?></h3>
														<p>24小时在线支持！</p>
												</div>
										</div>
										<!--Single Feature End-->
								</div>
								<div class="col-md-4">
										<!--Single Feature Start-->
										<div class="single-feature">
												<div class="feature-icon">
														<i class="icon ion-email"></i>
												</div>
												<div class="feature-content">
														<h3><?php echo ($company["email"]); ?></h3>
														<p>欢迎使用邮件进行报价！</p>
												</div>
										</div>
										<!--Single Feature End-->
								</div>
								<div class="col-md-4">
										<!--Single Feature Start-->
										<div class="single-feature">
												<div class="feature-icon">
														<i class="icon ion-ios-timer-outline"></i>
												</div>
												<div class="feature-content">
														<h3><?php echo ($company["address"]); ?></h3>
														<p>期待你的来临指导！</p>
												</div>
										</div>
										<!--Single Feature End-->
								</div>
						</div>
				</div>
		</div>
		<!--Feature Area End-->
		<!--Footer Area Start-->
		<footer>
				<div class="footer-container">
						<!--Footer Top Area Start-->
						<div class="footer-top-area pt-50 pb-35">
								<div class="container">
										<div class="row">
												<div class="col-lg-4 col-md-6 col-12">
														<!--Single Footer Wiedget Start-->
														<div class="single-footer-wiedget mb-30">
																<div class="footer-logo">
																		<a href="index.html"><img src="/chikwong/NewRPJ/Public<?php echo ($company["logo"]); ?>" alt=""></a>
																</div>
																<div class="desc-footer">广州瑞谱佳科技有限公司拥有稳妥，快捷，优质的售后服务，欢迎垂询！</div>
																<div class="address-footer">
																	 <p class="address"><span><?php echo ($company["address"]); ?></span></p>
																	 <p class="phone"><span><?php echo ($company["tel"]); ?></span></p>
																	 <p class="mail"><span><?php echo ($company["email"]); ?></span></p>
																</div>
														</div>
														<!--Single Footer Wiedget End-->
												</div>
												<div class="col-lg-2 col-md-6 col-12">
														<!--Single Footer Wiedget Start-->
														<div class="single-footer-wiedget mb-30">
																<div class="footer-title">
																		<h3>Products</h3>
																</div>
																<ul class="link-widget">
																		<li><a href="#">Prices drop</a></li>
																		<li><a href="#">New products</a></li>
																		<li><a href="#">Best sales</a></li>
																		<li><a href="#">Contact us</a></li>
																		<li><a href="#">Sitemap</a></li>
																		<li><a href="#">Login</a></li>
																</ul>
														</div>
														<!--Single Footer Wiedget End-->
												</div>
												<div class="col-lg-2 col-md-6 col-12">
														<!--Single Footer Wiedget Start-->
														<div class="single-footer-wiedget mb-30">
																<div class="footer-title">
																		<h3>Our company</h3>
																</div>
																<ul class="link-widget">
																		<li><a href="#">Delivery</a></li>
																		<li><a href="#">Legal Notice</a></li>
																		<li><a href="#">About us</a></li>
																		<li><a href="#">Secure payment</a></li>
																		<li><a href="#">Contact us</a></li>
																		<li><a href="#">Stores</a></li>
																</ul>
														</div>
														<!--Single Footer Wiedget End-->
												</div>
												<div class="col-lg-4 col-md-6 col-12">
														<!--Single Footer Wiedget Start-->
														<div class="single-footer-wiedget mb-30">
																<div class="footer-title">
																		<h3>Instagram</h3>
																		<a href="#">Follow our instagram</a>
																</div>
																<ul id="Instafeed"></ul>
														</div>
														<!--Single Footer Wiedget End-->
												</div>
										</div>
								</div>
						</div>
						<!--Footer Top Area End-->

						<!--Footer Bottom Area Start-->
						<div class="footer-bottom-area">
								<div class="container">
										<div class="row">
												<div class="col-md-6">
																<!--Footer Copyright Start-->
														<div class="footer-copyright">
																<p>Copyright &copy; <a href="www.bootstrapmb.com"><?php echo ($company["name"]); ?>.</a> <?php echo ($company["icp"]); ?></p>
														</div>
														<!--Footer Copyright End-->
												</div>
												<div class="col-md-6">
																<!--Footer Payment Start-->
														<div class="footer-payments-image text-center text-md-right">
																<img src="/chikwong/NewRPJ/Public/img/payment/payment.png" alt="">
														</div>
														<!--Footer Payment End-->
												</div>
										</div>
								</div>
						</div>
						<!--Footer Bottom Area End-->
				</div>
		</footer>
		<!--Footer Area End-->
				<!-- Modal Area Strat -->
				<div class="modal fade" id="open-modal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
									<!--Modal Img-->
									<div class="col-md-5">
											<!--Modal Tab Content Start-->
											<div class="tab-content product-details-large" id="myTabContent">
												<div class="tab-pane fade show active" id="single-slide1" role="tabpanel" aria-labelledby="single-slide-tab-1">
														<!--Single Product Image Start-->
														<div class="single-product-img img-full">
															<img src="/chikwong/NewRPJ/Public/img/single-product/large/large1.jpg" alt="">
														</div>
														<!--Single Product Image End-->
												</div>
												<div class="tab-pane fade" id="single-slide2" role="tabpanel" aria-labelledby="single-slide-tab-2">
														<!--Single Product Image Start-->
														<div class="single-product-img img-full">
															<img src="/chikwong/NewRPJ/Public/img/single-product/large/large2.jpg" alt="">
														</div>
														<!--Single Product Image End-->
												</div>
												<div class="tab-pane fade" id="single-slide3" role="tabpanel" aria-labelledby="single-slide-tab-3">
														<!--Single Product Image Start-->
														<div class="single-product-img img-full">
															<img src="/chikwong/NewRPJ/Public/img/single-product/large/large3.jpg" alt="">
														</div>
														<!--Single Product Image End-->
												</div>
												<div class="tab-pane fade" id="single-slide4" role="tabpanel" aria-labelledby="single-slide-tab-4">
														<!--Single Product Image Start-->
														<div class="single-product-img img-full">
															<img src="/chikwong/NewRPJ/Public/img/single-product/large/large4.jpg" alt="">
														</div>
														<!--Single Product Image End-->
												</div>
											</div>
											<!--Modal Content End-->
											<!--Modal Tab Menu Start-->
											<div class="single-product-menu">
													<div class="nav single-slide-menu" role="tablist">
															<div class="single-tab-menu img-full">
																	<a class="active" data-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img src="/chikwong/NewRPJ/Public/img/single-product/small/small1.jpg" alt=""></a>
															</div>
															<div class="single-tab-menu img-full">
																	<a data-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img src="/chikwong/NewRPJ/Public/img/single-product/small/small2.jpg" alt=""></a>
															</div>
															<div class="single-tab-menu img-full">
																	<a data-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img src="/chikwong/NewRPJ/Public/img/single-product/small/small3.jpg" alt=""></a>
															</div>
															<div class="single-tab-menu img-full">
																	<a data-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img src="/chikwong/NewRPJ/Public/img/single-product/small/small4.jpg" alt=""></a>
															</div>
													</div>
											</div>
											<!--Modal Tab Menu End-->
									</div>
									<!--Modal Img-->
									<!--Modal Content-->
									<div class="col-md-7">
											<div class="single-product-content">
													<h1 class="single-product-name">Printed Chiffon Dress</h1>
													<div class="single-product-reviews">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
													</div>
													<div class="single-product-price">
															<div class="product-discount">
																	<span class="regular-price">$20.50</span>
																	<span class="price">$16.40</span>
																	<span class="discount">-20%</span>
															</div>
													</div>
													<div class="product-info">
															<p>Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
													</div>
													<div class="single-product-action">
															<form action="#">
																	<div class="product-variants">
																			<div class="product-variants-item">
																						<span class="control-label">Size</span>
																						<select class="nice-select" name="size">
																								<option value="1">S</option>
																								<option value="2">M</option>
																								<option value="3">X</option>
																								<option value="4">XL</option>
																						</select>
																				</div>
																				<div class="product-variants-item">
																						<span class="control-label">Color</span>
																						<select class="nice-select" name="color">
																								<option value="1">Red</option>
																								<option value="2">Green</option>
																								<option value="3">Blue</option>
																								<option value="4">White</option>
																						</select>
																				</div>
																	</div>
																	<div class="product-add-to-cart">
																			<span class="control-label">Quantity</span>
																			<div class="cart-plus-minus">
																					<input class="cart-plus-minus-box" type="text" name="qtybutton" value="0">
																			 </div>
																			 <div class="add">
																					 <button class="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add-to-cart</button>
																					 <span class="product-availability"><i class="zmdi zmdi-check"></i> In stock</span>
																			 </div>
																	</div>
															</form>
													</div>
											</div>
									</div>
									<!--Modal Content-->
							</div>
						</div>
						<div class="modal-footer">
							<!--Single Product Share-->
							<div class="single-product-share">
									<ul>
										 <li class="categories-title">Share :</li>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
							</div>
							<!--Single Product Share-->
						</div>
					</div>
				</div>
				</div>
				<!-- Modal Area End -->
	</div>





		<!--All Js Here-->

	<!--Jquery 1.12.4-->
	<script src="/chikwong/NewRPJ/Public/scripts/vendor/jquery-1.12.4.min.js"></script>
	<!--Imagesloaded-->
	<script src="/chikwong/NewRPJ/Public/scripts/imagesloaded.pkgd.min.js"></script>
	<!--Isotope-->
	<script src="/chikwong/NewRPJ/Public/scripts/isotope.pkgd.min.js"></script>
	<!--Waypoints-->
	<script src="/chikwong/NewRPJ/Public/scripts/waypoints.min.js"></script>
	<!--Counterup-->
	<script src="/chikwong/NewRPJ/Public/scripts/jquery.counterup.min.js"></script>
	<!--Countdown-->
	<script src="/chikwong/NewRPJ/Public/scripts/jquery.countdown.min.js"></script>
	<!--Carousel-->
	<script src="/chikwong/NewRPJ/Public/scripts/owl.carousel.min.js"></script>
	<!--Slick-->
	<script src="/chikwong/NewRPJ/Public/scripts/slick.min.js"></script>
	<!--Meanmenu-->
	<script src="/chikwong/NewRPJ/Public/scripts/jquery.meanmenu.min.js"></script>
	<!--Instafeed-->
	<!--<script src="js/instafeed.min.js"></script>-->
	<!--Nice Select-->
	<script src="/chikwong/NewRPJ/Public/scripts/jquery.nice-select.min.js"></script>
	<!--ScrollUp-->
	<script src="/chikwong/NewRPJ/Public/scripts/jquery.scrollUp.min.js"></script>
	<!--Wow-->
	<script src="/chikwong/NewRPJ/Public/scripts/wow.min.js"></script>
	<!--Venobox-->
	<script src="/chikwong/NewRPJ/Public/scripts/venobox.min.js"></script>
	<!--Popper-->
	<script src="/chikwong/NewRPJ/Public/scripts/popper.min.js"></script>
	<!--Bootstrap-->
	<script src="/chikwong/NewRPJ/Public/scripts/bootstrap.min.js"></script>
	<!--Plugins-->
	<script src="/chikwong/NewRPJ/Public/scripts/plugins.js"></script>
	<!--Main Js-->
	<script src="/chikwong/NewRPJ/Public/scripts/main.js"></script>
	</body>
	</html>