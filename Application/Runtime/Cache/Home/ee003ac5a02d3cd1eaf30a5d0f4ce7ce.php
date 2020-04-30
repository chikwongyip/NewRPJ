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
		<!-- copy -->
		<!--Header Area End-->
		<!--Breadcrumb Area Start-->
		<div class="breadcrumb-area">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <div class="breadcrumb-content text-center">
                            <h1 class="breadmome-name">Shop</h1>
		                    <ul>
		                        <li><a href="index.html">主页</a></li>
		                        <li class="active">产品列表</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Breadcrumb Area End-->
		<!--Shop Area Start-->
		<div class="shop-area mt-80">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-3 order-2 order-lg-1">
		                <!--Shop Product Categorie Start-->
		                <div class="shop-product-cate mb-20">
		                    <h3>产品分类</h3>
		                    <div id="shop-cate-toggle" class="category-menu sidebar-menu sidbar-style">
		                        <ul class="category-sub-menu">
														 <?php if(is_array($category)): foreach($category as $key=>$cate_list): ?><li class="has-sub"><a href="#"><?php echo ($cate_list["category_name"]); ?></a>
		                             <ul class="category-sub">
																	 <?php if(is_array($brand)): foreach($brand as $key=>$brand_list): if($brand_list['category_id']=$cate_list['category_id']): ?><li><a href="shop.html"><?php echo ($brand_list["brand_name"]); ?></a></li><?php endif; endforeach; endif; ?>
                                  </ul>
			                         </li><?php endforeach; endif; ?>
		                     </ul>
		                   </div>
		                </div>
		                <!--Shop Product Categorie End-->
		                <!--Brand Categorie Widget Start-->
		                <div class="shop-sidebar mb-20">
		                    <h3>品牌</h3>
		                    <div class="shop-checkbox">
		                        <ul>
																<?php if(is_array($brands)): foreach($brands as $key=>$brand_list): ?><li><input name="product-categori" type="checkbox"><a href="#"><?php echo ($brand_list["brand_name"]); ?></a></li><?php endforeach; endif; ?>
		                        </ul>
		                    </div>
		                </div>
		                <!--Brand Categorie Widget End-->
		            </div>
		            <div class="col-lg-9 order-1 order-lg-2">
		                <div class="shop-layout">
		                    <!--Grid & List View Start-->
		                    <div class="shop-topbar-wrapper mb-30 d-md-flex justify-content-md-between align-items-center">
		                        <div class="grid-list-option">
		                             <ul class="nav">
                                      <li>
                                        <a class="active" data-toggle="tab" href="#grid"><i class="ion-grid show_grid"></i></a>
                                      </li>
                                      <li>
                                        <a data-toggle="tab" href="#list"><i class="ion-android-menu show_list"></i></a>
                                      </li>
                                    </ul>
                                    <!-- <p class="show-product">Showing 1–9 of 42 results</p> -->
		                         </div>
		                         <!--Toolbar Short Area Start-->
		                         <!-- <div class="toolbar-short-area d-md-flex align-items-center">
                                     <div class="toolbar-shorter">
                                        <label>Sort By:</label>
                                         <select class="wide nice-select">
                                             <option data-display="Select">Nothing</option>
                                             <option value="Relevance">Relevance</option>
                                             <option value="Name, A to Z">Name, A to Z</option>
                                             <option value="Name, Z to A">Name, Z to A</option>
                                             <option value="Price, low to high">Price, low to high</option>
                                             <option value="Price, high to low">Price, high to low</option>
                                         </select>
                                     </div>
                                 </div> -->
		                         <!--Toolbar Short Area End-->
		                    </div>
		                    <!--Grid & List View End-->
		                    <!--Shop Product Start-->
		                    <div class="shop-product">
		                        <div id="myTabContent-2" class="tab-content">
		                            <div id="grid" class="tab-pane fade show active">
		                                <div class="product-grid-view">
		                                    <div class="row">
																							<?php if(is_array($product)): foreach($product as $key=>$prod_list): ?><div class="col-lg-4 col-xl-4 col-md-4">
                                                    <!--Single Product Start-->
                                                    <div class="single-product mb-30">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="first-img" src="/chikwong/NewRPJ/Public<?php echo ($prod_list["product_pic300"]); ?>" alt="">
                                                                <!-- <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product7.jpg" alt=""> -->
                                                            </a>
                                                            <span class="sticker">New</span>

                                                        </div>
                                                        <div class="product-content">
                                                            <h4><a href="single-product.html"><?php echo ($prod_list["product_name"]); ?></a></h4>
                                                            <div class="product-price">
                                                                <span class="price"><?php echo ($prod_list["brand_name"]); ?></span>
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
                                              </div><?php endforeach; endif; ?>
		                                    </div>
		                                </div>
		                            </div>
		                            <div id="list" class="tab-pane fade">
		                                <div class="product-list-view">
		                                    <div class="product-list-item mb-40">
		                                        <div class="row">
		                                            <!--Single List Product Start-->
																								<?php if(is_array($product)): foreach($product as $key=>$prod_list): ?><div class="col-md-4">
			                                                <div class="single-product">
			                                                    <div class="product-img">
			                                                        <a href="single-product.html">
	                                                                    <img class="first-img" src="/chikwong/NewRPJ/Public<?php echo ($prod_list["product_pic300"]); ?>" alt="">
	                                                                    <!-- <img class="hover-img" src="/chikwong/NewRPJ/Public/img/product/product7.jpg" alt=""> -->
	                                                                </a>
	                                                                <span class="sticker">New</span>
			                                                    </div>
			                                                </div>
			                                            </div>
			                                            <div class="col-md-8">
			                                                <div class="product-content shop-list">
			                                                    <h4><a href="single-product.html"><?php echo ($prod_list["product_name"]); ?></a></h4>
	                                                            <div class="product-price">
	                                                                <span class="price"><?php echo ($prod_list["brand_name"]); ?></span>
	                                                            </div>
	                                                            <div class="product-reviews">
	                                                                <i class="ion-android-star"></i>
	                                                                <i class="ion-android-star"></i>
	                                                                <i class="ion-android-star"></i>
	                                                                <i class="ion-android-star"></i>
	                                                                <i class="ion-android-star"></i>
	                                                            </div>
	                                                            <div class="product-description">
	                                                                <p><?php echo ($prod_list["product_desc"]); ?></p>
	                                                            </div>
	                                                             <!-- <div class="product-list-action">
	                                                                <ul>
	                                                                    <li><a class="pro-add-btn" href="#"><i class="ion-bag"></i>Add to cart</a></li>
	                                                                    <li><a href="#open-modal" data-toggle="modal"><i class="ion-eye"></i></a></li>
	                                                                    <li><a href="#"><i class="ion-ios-copy-outline"></i></a></li>
	                                                                </ul>
	                                                            </div> -->
			                                                </div>
			                                            </div><?php endforeach; endif; ?>
		                                            <!--Single List Product End-->
		                                        </div>
		                                    </div>

		                                </div>
		                            </div>
		                            <!--Pagination Start-->
                                    <!-- <div class="pagination-product d-md-flex justify-content-md-between align-items-center">
                                      <div class="showing-product">
                                          <p> Showing 1-12 of 13 item(s) </p>
                                      </div>
                                      <div class="page-list">
                                          <ul>
                                              <li class="prev"><a href="#"><i class="ion-ios-arrow-left"></i>Previous</a></li>
                                              <li class="active"><a href="#">1</a></li>
                                              <li><a href="#">2</a></li>
                                              <li class="next"><a href="#">Next<i class="ion-ios-arrow-right"></i></a></li>
                                          </ul>
                                      </div>
                                    </div> -->
		                            <!--Pagination End-->
		                        </div>
		                    </div>
		                    <!--Shop Product End-->
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--Shop Area End-->
		<!--Feature Area End-->
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
																			<li><a href="<?php echo U('home/index/index');?>">主页</a></li>
																			<li><a href="<?php echo U('home/prodlist/prodlist');?>">产品</a></li>
																			<li><a href="<?php echo U('home/about/about');?>">关于我们</a></li>
																			<li><a href="#">产品附件下载</a></li>
																		</ul>
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
				                            <p>Copyright &copy; <a href="<?php echo U('home/index/index');?>"><?php echo ($company["name"]); ?>.</a> <?php echo ($company["icp"]); ?></p>
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