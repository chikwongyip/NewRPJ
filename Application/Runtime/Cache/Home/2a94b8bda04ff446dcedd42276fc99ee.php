<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>主页 || 广州瑞谱佳科技有限公司</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="/NewRPJ/Public/img/favicon.ico">
    <!--All Css Here-->

	<!-- Ionicons Font CSS-->
    <link rel="stylesheet" href="/NewRPJ/Public/css/ionicons.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/NewRPJ/Public/css/font-awesome.min.css">

	<!-- Animate CSS-->
	<link rel="stylesheet" href="/NewRPJ/Public/css/animate.css">
	<!-- Owl Carousel CSS-->
	<link rel="stylesheet" href="/NewRPJ/Public/css/owl.carousel.min.css">
	<!-- Nice Select CSS-->
	<link rel="stylesheet" href="/NewRPJ/Public/css/nice-select.css">
	<!-- Slick CSS-->
	<link rel="stylesheet" href="/NewRPJ/Public/css/slick.css">
	<!-- Meanmenu CSS-->
	<link rel="stylesheet" href="/NewRPJ/Public/css/meanmenu.min.css">
	<!-- Venobox CSS-->
	<link rel="stylesheet" href="/NewRPJ/Public/css/venobox.css">
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="/NewRPJ/Public/css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="/NewRPJ/Public/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="/NewRPJ/Public/css/responsive.css">
	<!-- Modernizr Js -->
	<script src="/NewRPJ/Public/scripts/vendor/modernizr-2.8.3.min.js"></script>
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
		                        <a href="<?php echo U('home/index/index');?>">广州瑞谱佳，欢迎您！</a>
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
		                        <a href="<?php echo U('home/index/index');?>">
															<img src="/NewRPJ/Public<?php echo ($company["logo"]); ?>" alt="">
		                        </a>
		                    </div>
		                    <!--Logo End-->
		                </div>
		                <div class="col-md-9">
		                    <!--Header Menu Start-->
		                    <div class="header-menu-area">
		                        <nav>
		                            <ul class="main-menu">
		                                <li class="active"><a href="<?php echo U('home/index/index');?>">主页</a>
		                                    <!--Dropdown Menu Start-->

		                                    <!--Dropdown Menu End-->
		                                </li>

		                                <!-- <li><a href="shop.html">产品</a></li> -->

		                                <!-- <li><a href="blog.html">Blog</a></li> -->
		                                <li><a href="<?php echo U('home/prodlist/prodlist');?>">产品</a>
		                                    <!--Mega Menu Start-->
		                                    <ul class="mega-menu">
																							<?php if(is_array($brands)): foreach($brands as $key=>$brd_list): ?><li><a href="<?php echo U('home/prodlist/listwithbrand',array('brand_id'=>$brd_list[brand_id]));?>" class="item-link"><?php echo ($brd_list["brand_name"]); ?></a>
		                                                <ul>
																											<?php if(is_array($product)): foreach($product as $key=>$pro_list): if($brd_list['brand_id'] == $pro_list['brand_id']): ?><li><a href="<?php echo U('home/product/product',array('product_id'=>$pro_list[product_id]));?>"><?php echo ($pro_list["product_name"]); ?></a></li><?php endif; endforeach; endif; ?>
                                                    </ul>
		                                            </li><?php endforeach; endif; ?>
		                                        </ul>
		                                    <!--Mega Menu End-->
		                                </li>
																		<li><a href="<?php echo U('home/attach/attach');?>">产品附件下载</a></li>
																	  <li><a href="<?php echo U('home/about/about');?>">关于我们</a></li>
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
                              <ul>
															  <?php if(is_array($category)): foreach($category as $key=>$cat_list): ?><li class="right-menu"><a href="<?php echo U('home/prodlist/listwithcategory',array('category_id'=>$cat_list[category_id]));?>"><?php echo ($cat_list["category_name"]); ?></a>
																		  <ul class="cat-mega-menu">
																				<?php if(is_array($brand)): foreach($brand as $key=>$brand_list): if($cat_list['category_id'] == $brand_list['category_id']): ?><li class="right-menu cat-mega-title">
		                                           <a href="<?php echo U('home/prodlist/listwithboth',array('brand_id'=>$brand_list[brand_id],'category_id'=>$cat_list['category_id']));?>"><?php echo ($brand_list["brand_name"]); ?></a>
		                                            <ul>
																									<?php if(is_array($product)): foreach($product as $key=>$pro_list): if(($pro_list['category_id'] == $brand_list['category_id']) and ($pro_list['brand_id'] == $brand_list['brand_id'])): ?><li><a href="<?php echo U('home/product/product',array('product_id'=>$pro_list[product_id]));?>"><?php echo ($pro_list["product_name"]); ?></a></li><?php endif; endforeach; endif; ?>
		                                            </ul>
	                                        	</li><?php endif; endforeach; endif; ?>
																			</ul>
                                  </li><?php endforeach; endif; ?>
                              </ul>
                          </div>
                        </div>
                            <!--Category Menu End-->
		                </div>
		                <div class="col-md-9 col-lg-6 order-lg-2 order-1">
		                    <!--Header Top Search Start-->
		                    <div class="header-top-search">
                                <div class="search-categories">
                                    <form action="<?php echo U('home/prodlist/prodlist');?>" method="post">
                                        <div class="search-form-input">
                                            <select id="select" name="category_id" class="nice-select">
                                                <option value="0">全部类别</option>
																								<?php if(is_array($category)): foreach($category as $key=>$list): ?><option value="<?php echo ($list["category_id"]); ?>" ><?php echo ($list["category_name"]); ?></option><?php endforeach; endif; ?>
                                            </select>
                                            <input type="text" name="product_name" placeholder="搜索你需要得产....">
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
														<?php if(is_array($product)): foreach($product as $key=>$pro_list): if($pro_list['top'] == 'X'): ?><div class="single-slider" style="background-image: url(/NewRPJ/Public<?php echo ($pro_list["product_pic"]); ?>)">
		                                <div class="hero-slider-content">
		                                    <h2 class="slow-animation1"><?php echo ($pro_list["product_name"]); ?></h2>
		                                    <h2 class="slow-animation2"><?php echo ($pro_list["brand_name"]); ?></h2>
<!--		                                    <h4><?php echo ($pro_list["product_desc"]); ?></h4>-->
		                                    <h1><?php echo ($pro_list["product_model"]); ?></h1>
		                                    <div class="slider-btn mt-50">
		                                        <a href="<?php echo U('home/product/product',array('product_id'=>$pro_list[product_id]));?>">点击浏览</a>
		                                    </div>
		                                </div>
		                            </div><?php endif; endforeach; endif; ?>
                            <!--Single Slider End-->
                      </div>
		            </div>
		            <div class="col-md-4 col-lg-3">
		                <!--Sidebar Product Categories Start-->
		                <div class="sidebar-product-categori">
		                    <div class="sidebar-cate-title">
		                        <h2>我们的品牌</h2>
		                    </div>
		                    <div class="categori-block-content owl-carousel">
		                        <div class="item-listcategories">
		                            <!--Single List Categories Start-->
																<?php if(is_array($brands)): foreach($brands as $key=>$list): ?><div class="list-categories">
<!--			                                <div class="desc-listcategoreis">-->
<!--			                                    <div class="name-categoreis">-->
<!--			                                       <a href="shop.html"><?php echo ($list["brand_name"]); ?></a>-->
<!--			                                    </div>-->
<!--			                                    <div class="view-more">-->
<!--			                                        <a href="#">点击浏览</a>-->
<!--			                                    </div>-->
<!--			                                </div>-->
			                                <div class="thumb-category">
			                                    <a href="<?php echo U('home/prodlist/listwithbrand',array('brand_id'=>$list[brand_id]));?>"><img src="/NewRPJ/Public<?php echo ($list["brand_image"]); ?>" alt=""></a>
			                                </div>
			                            </div><?php endforeach; endif; ?>
		                            <!--Single List Categories End-->
		                        </div>
		                        <!-- <div class="item-listcategories">

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
		                                    <a href="shop.html"><img src="/NewRPJ/Public/img/product-thumb/product-thumb4.jpg" alt=""></a>
		                                </div>
		                            </div>

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
		                                    <a href="shop.html"><img src="/NewRPJ/Public/img/product-thumb/product-thumb5.jpg" alt=""></a>
		                                </div>
		                            </div>

		                        </div> -->
		                    </div>
		                </div>
		                <!--Sidebar Product Categories Start-->
		            </div>
		        </div>
		    </div>
		</div>
		<?php if(is_array($category)): foreach($category as $key=>$cate_list): ?><div class="categorie-product-area mt-80">
			    <div class="container">
			        <div class="row">
			            <div class="col-12">
			                <!--Section Title Start-->
			                <div class="section-title float-left">
			                    <h2><?php echo ($cate_list["category_name"]); ?></h2>
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
																			<?php if(is_array($brand)): foreach($brand as $key=>$brand_list): if($cate_list['category_id'] == $brand_list['category_id']): ?><li><a href="<?php echo U('home/prodlist/listwithbrand',array('brand_id'=>$list[brand_id]));?>"><?php echo ($brand_list["brand_name"]); ?></a></li><?php endif; endforeach; endif; ?>
	                                </ul>
	                            </div>
	                            <!--Product Categorie Start-->
	                        </div>
	                        <div class="col-md-12 col-lg-9">
	                            <!--Product Banner Start-->
	                            <div class="banner-block-content">
	                                <div class="banner-inner">
	                                    <a href="<?php echo U('home/prodlist/listwithcategory',array('category_id'=>$cate_list[category_id]));?>"><img src="/NewRPJ/Public<?php echo ($cate_list["category_image"]); ?>" alt=""></a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="categorie-product-block-content">
	                        <div class="row">
	                            <div class="cate-product-slide owl-carousel">
																  <?php if(is_array($product)): foreach($product as $key=>$product_list): if($product_list['category_id'] == $cate_list['category_id']): if(is_array($brand)): foreach($brand as $key=>$brand_list): if($product_list['brand_id'] == $brand_list['brand_id']): ?><div class="col-md-12">
						                                    <!--Single Product Start-->
						                                    <div class="single-product">
						                                        <div class="product-img">
						                                            <a href="<?php echo U('home/product/product',array('product_id'=>$product_list[product_id]));?>">
						                                                <img class="first-img" src="/NewRPJ/Public<?php echo ($product_list["product_pic"]); ?>" alt="">
						                                                <img class="hover-img" src="/NewRPJ/Public<?php echo ($product_list["product_pic"]); ?>" alt="">
						                                            </a>
						                                            <span class="sticker">New</span>
						                                            <!-- <div class="product-action">
						                                                <ul>
						                                                    <li><a href="cart.html"><i class="ion-bag"></i></a></li>
						                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
						                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
						                                                </ul>
						                                            </div> -->
						                                        </div>
						                                        <div class="product-content">
						                                            <h4><a href="<?php echo U('home/product/product',array('product_id'=>$product_list[product_id]));?>"><?php echo ($product_list["product_name"]); ?></a></h4>
						                                            <div class="product-price">
						                                                <span class="price"><?php echo ($product_list["product_model"]); ?></span>
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
						                                </div><?php endif; endforeach; endif; endif; endforeach; endif; ?>
	                            </div>
	                        </div>
	                    </div>
			        </div>
			    </div>
			</div><?php endforeach; endif; ?>
		<!--Categorie Product Area End-->

		<!-- Brand Area Start -->
		<div class="brand-area mt-80">
	    <div class="container">
        <div class="brand-block-content">
          <div class="row">
            <div class="col-12">
              <div class="brand-active owl-carousel">
                  <?php if(is_array($brand)): foreach($brand as $key=>$brand_list): ?><div class="single-brand">
                      <a href="<?php echo U('home/prodlist/listwithbrand',array('brand_id'=>$brand_list[brand_id]));?>"><img src="/NewRPJ/Public<?php echo ($brand_list["brand_image"]); ?>" alt=""></a>
                    </div><?php endforeach; endif; ?>
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
																		<a href="<?php echo U('home/index/index');?>"><img src="/NewRPJ/Public<?php echo ($company["logo"]); ?>" alt=""></a>
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
																		<?php if(is_array($brands)): foreach($brands as $key=>$a): ?><li><a href="<?php echo U('home/prodlist/listwithbrand',array('brand_id'=>$a[brand_id]));?>"></a><?php echo ($a["brand_name"]); ?></li><?php endforeach; endif; ?>
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
																	<li><a href="<?php echo U('home/index/index');?>">主页</a></li>
																	<li><a href="<?php echo U('home/prodlist/prodlist');?>">产品</a></li>
																	<li><a href="<?php echo U('home/about/about');?>">关于我们</a></li>
																	<li><a href="<?php echo U('home/prodatt/prodatt_list');?>">产品附件下载</a></li>
																	<li><a href="<?php echo U('admin/login/login');?>">后台入口</a></li>
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
																<p>Copyright &copy; <a href="<?php echo U('home/index/index');?>"><?php echo ($company["name"]); ?>.</a> <?php echo ($company["icp"]); ?></p>
														</div>
														<!--Footer Copyright End-->
												</div>
<!--												<div class="col-md-6">-->
<!--																&lt;!&ndash;Footer Payment Start&ndash;&gt;-->
<!--														<div class="footer-payments-image text-center text-md-right">-->
<!--																<img src="/NewRPJ/Public/img/payment/payment.png" alt="">-->
<!--														</div>-->
<!--														&lt;!&ndash;Footer Payment End&ndash;&gt;-->
<!--												</div>-->
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
															<img src="/NewRPJ/Public/img/single-product/large/large1.jpg" alt="">
														</div>
														<!--Single Product Image End-->
												</div>
												<div class="tab-pane fade" id="single-slide2" role="tabpanel" aria-labelledby="single-slide-tab-2">
														<!--Single Product Image Start-->
														<div class="single-product-img img-full">
															<img src="/NewRPJ/Public/img/single-product/large/large2.jpg" alt="">
														</div>
														<!--Single Product Image End-->
												</div>
												<div class="tab-pane fade" id="single-slide3" role="tabpanel" aria-labelledby="single-slide-tab-3">
														<!--Single Product Image Start-->
														<div class="single-product-img img-full">
															<img src="/NewRPJ/Public/img/single-product/large/large3.jpg" alt="">
														</div>
														<!--Single Product Image End-->
												</div>
												<div class="tab-pane fade" id="single-slide4" role="tabpanel" aria-labelledby="single-slide-tab-4">
														<!--Single Product Image Start-->
														<div class="single-product-img img-full">
															<img src="/NewRPJ/Public/img/single-product/large/large4.jpg" alt="">
														</div>
														<!--Single Product Image End-->
												</div>
											</div>
											<!--Modal Content End-->
											<!--Modal Tab Menu Start-->
											<div class="single-product-menu">
													<div class="nav single-slide-menu" role="tablist">
															<div class="single-tab-menu img-full">
																	<a class="active" data-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img src="/NewRPJ/Public/img/single-product/small/small1.jpg" alt=""></a>
															</div>
															<div class="single-tab-menu img-full">
																	<a data-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img src="/NewRPJ/Public/img/single-product/small/small2.jpg" alt=""></a>
															</div>
															<div class="single-tab-menu img-full">
																	<a data-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img src="/NewRPJ/Public/img/single-product/small/small3.jpg" alt=""></a>
															</div>
															<div class="single-tab-menu img-full">
																	<a data-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img src="/NewRPJ/Public/img/single-product/small/small4.jpg" alt=""></a>
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
<!--						<div class="modal-footer">-->
<!--							&lt;!&ndash;Single Product Share&ndash;&gt;-->
<!--							<div class="single-product-share">-->
<!--									<ul>-->
<!--										 <li class="categories-title">Share :</li>-->
<!--											<li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
<!--											<li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
<!--									</ul>-->
<!--							</div>-->
<!--							&lt;!&ndash;Single Product Share&ndash;&gt;-->
<!--						</div>-->
					</div>
				</div>
				</div>
				<!-- Modal Area End -->
	</div>





		<!--All Js Here-->

	<!--Jquery 1.12.4-->
	<script src="/NewRPJ/Public/scripts/vendor/jquery-1.12.4.min.js"></script>
	<!--Imagesloaded-->
	<script src="/NewRPJ/Public/scripts/imagesloaded.pkgd.min.js"></script>
	<!--Isotope-->
	<script src="/NewRPJ/Public/scripts/isotope.pkgd.min.js"></script>
	<!--Waypoints-->
	<script src="/NewRPJ/Public/scripts/waypoints.min.js"></script>
	<!--Counterup-->
	<script src="/NewRPJ/Public/scripts/jquery.counterup.min.js"></script>
	<!--Countdown-->
	<script src="/NewRPJ/Public/scripts/jquery.countdown.min.js"></script>
	<!--Carousel-->
	<script src="/NewRPJ/Public/scripts/owl.carousel.min.js"></script>
	<!--Slick-->
	<script src="/NewRPJ/Public/scripts/slick.min.js"></script>
	<!--Meanmenu-->
	<script src="/NewRPJ/Public/scripts/jquery.meanmenu.min.js"></script>
	<!--Instafeed-->
	<!--<script src="js/instafeed.min.js"></script>-->
	<!--Nice Select-->
	<script src="/NewRPJ/Public/scripts/jquery.nice-select.min.js"></script>
	<!--ScrollUp-->
	<script src="/NewRPJ/Public/scripts/jquery.scrollUp.min.js"></script>
	<!--Wow-->
	<script src="/NewRPJ/Public/scripts/wow.min.js"></script>
	<!--Venobox-->
	<script src="/NewRPJ/Public/scripts/venobox.min.js"></script>
	<!--Popper-->
	<script src="/NewRPJ/Public/scripts/popper.min.js"></script>
	<!--Bootstrap-->
	<script src="/NewRPJ/Public/scripts/bootstrap.min.js"></script>
	<!--Plugins-->
	<script src="/NewRPJ/Public/scripts/plugins.js"></script>
	<!--Main Js-->
	<script src="/NewRPJ/Public/scripts/main.js"></script>
	</body>
	</html>