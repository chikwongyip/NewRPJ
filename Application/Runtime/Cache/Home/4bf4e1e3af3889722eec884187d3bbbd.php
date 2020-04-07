<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
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
		<!-- copy -->
		<!--Header Area End-->
		<!--Breadcrumb Area Start-->
		<div class="breadcrumb-area">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <div class="breadcrumb-content text-center">
                            <h1 class="breadmome-name">关于瑞谱佳</h1>
		                    <ul>
		                        <li><a href="index.html">主页</a></li>
		                        <li class="active">关于瑞谱佳</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Breadcrumb Area End-->
	    <!--About Us Area Start-->
		<div class="about-us-area mt-80">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-6 col-12">
		                <!--About Us Image Start-->
		                <div class="about-us-img-wrapper mb-30">
		                    <div class="about-us-image img-full">
                                <a href="#"><img src="/chikwong/NewRPJ/Public<?php echo ($company["background"]); ?>" alt=""></a>
                            </div>
		                </div>
		                <!--About Us Image End-->
		            </div>
		            <div class="col-lg-6 col-12">
		                <!--About Us Content Start-->
		                <div class="about-us-content">
		                    <h2><?php echo ($company["name"]); ?></h2>
		                    <p class="mb-20"><?php echo ($company["description"]); ?></p>
												<p class="mb-20">Tel:<?php echo ($company["tel"]); ?></p>
												<p class="mb-20">address:<?php echo ($company["address"]); ?></p>
												<p class="mb-20">email:<?php echo ($company["email"]); ?></p>
												<p class="mb-20"><?php echo ($company["icp"]); ?></p>
		                    <!-- <p class="mb-20">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo volup.</p>
		                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada vestibulum. Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu, pellentesque at sodales sit amet, condimentum id nunc. Donec ornare mattis suscipit. Praesent fermentum accumsan vulputate.</p>
		                    <a href="#" class="default-btn">read more</a> -->
		                </div>
		                <!--About Us Content End-->
		            </div>
		        </div>
		    </div>
		</div>
		<!--About Us Area End-->
<!-- copy -->
		<!--Feature Area Start-->
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
																		<h3>品牌列表</h3>
																</div>
																<ul class="link-widget">
																		<?php if(is_array($brands)): foreach($brands as $key=>$a): ?><li><a href="#"></a><?php echo ($a["brand_name"]); ?></li><?php endforeach; endif; ?>
																</ul>
														</div>
														<!--Single Footer Wiedget End-->
												</div>
												<div class="col-lg-2 col-md-6 col-12">
														<!--Single Footer Wiedget Start-->
														<div class="single-footer-wiedget mb-30">
																<div class="footer-title">
																		<h3>网站快速链接</h3>
																</div>
																<ul class="link-widget">
																		<li><a href="#">主页</a></li>
																		<li><a href="#">产品</a></li>
																		<li><a href="#">关于我们</a></li>
																		<li><a href="#">产品附件下载</a></li>
																</ul>
														</div>
														<!--Single Footer Wiedget End-->
												</div>
												<!-- <div class="col-lg-4 col-md-6 col-12">

														<div class="single-footer-wiedget mb-30">
																<div class="footer-title">
																		<h3>Instagram</h3>
																		<a href="#">Follow our instagram</a>
																</div>
																<ul id="Instafeed"></ul>
														</div>

												</div> -->
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