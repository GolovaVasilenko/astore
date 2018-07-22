<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?=$this->getMeta();?>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/animate.css">
        <link rel="stylesheet" href="/assets/css/meanmenu.css">
        <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/css/slick.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/responsive.css">
       
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
        <!-- Header Area Start -->   
		<header>
			<div class="header-area header-area-padding">
			    <div class="top-link top-link-padding bg-black">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="top-left">
                                    <p>Default welcome mgs!</p>
                                    <a href="register.html">Register</a>
                                    <span>or</span>
                                    <a href="login.html">Login</a>  
                                </div>	
                            </div>
                            <div class="col-md-6">
                               <div class="account-usd text-left">
                                    <ul>

                                        <li><a href="register.html">Мой кабинет</a>
                                            <?php if(\astore\Session::get('user')):?>
                                                <ul class="submenu-mainmenu">
                                                    <li><a href="product-details.html">Сравнить товары</a></li>
                                                    <li><a href="register.html">Кабинет пользователя</a></li>
                                                    <li><a href="wishlist.html">Список желаний</a></li>
                                                    <li><a href="/user/logout">Выход</a></li>
                                                </ul>
                                            <?php else:?>
                                                <ul class="submenu-mainmenu">
                                                    <li><a href="/user/login">Вход</a></li><br>
                                                    <li><a href="/user/register">Регистрация</a></li>
                                                </ul>
                                            <?php endif;?>
                                        </li>

                                        <li class="currency"><a href="#">English1</a>
                                            <ul class="submenu-mainmenu">
                                                <li><a href="#">Russian</a></li>
                                                <li><a href="#">English</a></li>
                                            </ul>
                                        </li>
                                        <li class="language"><a href="#">USD</a>
                                            <ul class="submenu-mainmenu">
                                                <li><a href="#">Грн</a></li>
                                                <li><a href="#">Euro</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="logo main">
                                    <a href="index.html"><img src="/assets/img/logo/logo.png" alt="shopro" /></a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4">
                                <div class="search-box" id="search-form">
                                    <form action="#">
                                        <input placeholder="Search entire store here..." type="text">
                                        <button class="search" type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5">
                                <div class="header-phone">
                                    <div class="fa fa-volume-control-phone"></div>
                                    <div class="header-phn-info">
                                        <p>Call us now</p>
                                        <span>(080) 123 4567 890</span>
                                    </div>
                                </div>
                                <div class="header-cart main">
                                    <a href="cart.html">
                                        <i class="fa fa-shopping-bag"></i>
                                        <span>my cart</span>
                                        <span class="counter">2</span>   
                                    </a>
                                    <ul class="submenu-mainmenu">
                                        <li class="single-cart-item clearfix mb-10">
                                            <span class="cart-img">
                                                <a href="shop.html"><img src="/assets/img/menu/1.jpg" alt=""></a>
                                            </span>
                                            <span class="cart-info">
                                                <a href="product-details.html">Lorem Ipsam...</a>
                                                <span>1 x $104.99</span>
                                                <a class="trash" href="#"><i class="fa fa-trash"></i></a>
                                            </span>  
                                        </li>
                                        <li class="single-cart-item clearfix mb-10">
                                            <span class="cart-img">
                                                <a href="shop.html"><img src="/assets/img/menu/2.jpg" alt=""></a>
                                            </span>
                                            <span class="cart-info">
                                                <a href="product-details.html">Lorem Ipsam...</a>
                                                <span>2 x $104.99</span>
                                                <a class="trash" href="#"><i class="fa fa-trash"></i></a>
                                            </span>   
                                        </li>
                                        <li>
                                            <span class="sub-total-cart text-center">
                                                SubTotal <span>$620</span>
                                                <a href="checkout.html" class="view-cart">Checkout</a>
                                            </span>
                                        </li>    
                                    </ul>
                                </div>            
                            </div>
                        </div>
                    </div>  
                </div> 
                <!-- Mainmenu Area Start -->
                <div class="mainmenu-area header-sticky">
                    <div class="container">
                        <div class="menu-wrapper display-none">
                            <div class="main-menu mean-menu">
                                <nav style="display: block;">
                                    <ul>
                                        <li class="active"><a href="index.html">home</a>
                                            <ul>
                                                <li><a href="index.html">home one</a></li>
                                                <li><a href="index-2.html">home two</a></li>
                                                <li><a href="index-3.html">home three</a></li>
                                                <li><a href="index-4.html">home four</a></li>
                                                <li><a href="index-5.html">home five</a></li>
                                                <li><a href="index-6.html">home six</a></li>
                                            </ul>
                                        </li>
                                        <li class="megamenu-catalog"><a href="#">Каталог <i class="fa fa-angle-down"></i></a>
                                            <?php new \app\widgets\catalog\CatalogList([
                                                    'tpl' => APP . '/views/widgets/catalog/menu_catalog.php',
                                            ]);?>
                                        </li>
                                        <li><a href="shop.html">shop</a>
                                            <ul>
                                                <li><a href="shop.html">shop page</a></li>
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="cart.html">cart page</a></li>
                                                <li><a href="checkout.html">checkout page</a></li>
                                                <li><a href="wishlist.html">wishlist page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">blog page</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="cart.html">pages</a>
                                            <ul>
                                                <li><a href="cart.html">cart page</a></li>
                                                <li><a href="checkout.html">checkout page</a></li>
                                                <li><a href="wishlist.html">wishlist page</a></li>
                                                <li><a href="register.html">register page</a></li>
                                                <li><a href="login.html">login page</a></li>
                                                <li><a href="contact.html">contact page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="#">buy now</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mainmenu Area End -->
                        <!-- Mobile Menu Area Start -->
                        <div class="mobile-menu-area col-12">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">
                                        <li><a href="index.html">home</a>
                                            <ul>
                                                <li><a href="index.html">home one</a></li>
                                                <li><a href="index-2.html">home two</a></li>
                                                <li><a href="index-3.html">home three</a></li>
                                                <li><a href="index-4.html">home four</a></li>
                                                <li><a href="index-5.html">home five</a></li>
                                                <li><a href="index-6.html">home six</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="cart.html">pages</a>
                                            <ul>
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                                <li><a href="login.html">login</a></li>
                                                <li><a href="register.html">register</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </nav>							
                            </div>
                        </div>
                        <!-- Mobile Menu Area End -->
                    </div>
                </div>
			</div>
		</header>
		<!-- Header Area End -->
	    <div class="content-area">
            <div class="container arrea-errors">
                <div class="row">
                    <div class="col-md-12">
                        <?php if(isset($errors)):?>
                            <div class="alert alert-danger">
                                <?=$errors; ?>
                            </div>
                        <?php endif;?>
                        <?php if(isset($success)):?>
                            <div class="alert alert-success">
                                <?=$success; ?>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <?=$content;?>
        </div>
        <!-- Footer Start -->
        <footer class="footer-area">
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="single-widget">
                                <div class="footer-logo pb-28">
                                    <a href="index.html"><img src="/assets/img/logo/footer-logo.png" alt="shopro"></a>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majorited have suffered alteration.</p>
                                </div>
                                <div class="footer-add">
                                    <h4>address:</h4>
                                    <p> 169-C, Technohub, Dubai Silicon Oasis.</p>
                                </div>
                                <div class="footer-add">
                                    <h4>mail us:</h4>
                                    <a href="#">contact@shopro.com</a>
                                </div>
                                <div class="footer-add">
                                    <h4>phone:</h4>
                                    <p> (+800) 123 456 789)</p>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <div class="single-widget">
                                <h3>newsletter sign up</h3>
                                <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate text-left" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll" class="mc-form"> 
                                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email address" required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                        <button id="mc-embedded-subscribe" type="submit" name="subscribe">subscribe</button> 
                                    </div>    
                                </form>
                                <div class="mailchimp-alerts">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div>
                                <!-- mailchimp-alerts end -->
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="single-widget">
                                        <h2>my account</h2>
                                        <ul>
                                            <li><a href="register.html">My Account</a></li>
                                            <li><a href="#">brands</a></li>
                                            <li><a href="#">gift certificates</a></li>
                                            <li><a href="#">affiliates</a></li>
                                            <li><a href="wishlist.html">wish list</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-widget">
                                        <h2>information</h2>
                                        <ul>
                                            <li><a href="#">about us</a></li>
                                            <li><a href="#">delivery information</a></li>
                                            <li><a href="#">privacy policy</a></li>
                                            <li><a href="#">terms &amp; conditions</a></li>
                                            <li><a href="#">FAQ</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-widget">
                                        <h2>customer service</h2>
                                        <ul>
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="#">returns</a></li>
                                            <li><a href="#">site map</a></li>
                                            <li><a href="#">specials</a></li>
                                            <li><a href="#">order history</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="copyright">
                                <p>Copyright © 2018 <a href="#">Shopro</a>. All Rights Reserved</p>
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="payment">
                                <a href="shop.html"><img src="/assets/img/icon/payment.png" alt="payment"></a>
                            </div>
                        </div> 
                    </div>
                </div>    
            </div>
        </footer>
        <!-- Footer End -->
        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 padright col-12">
                                    <div class="single-product-image product-image-slider fix">
                                        <div class="p-image"><img src="/assets/img/product/pro-large1.jpg" alt=""></div>
                                        <div class="p-image"><img src="/assets/img/product/pro-large2.jpg" alt=""></div>
                                        <div class="p-image"><img src="/assets/img/product/pro-large3.jpg" alt=""></div>
                                        <div class="p-image"><img src="/assets/img/product/pro-large4.jpg" alt=""></div>
                                    </div>
                                    <div class="single-product-thumbnail product-thumbnail-slider float-left">
                                        <div class="p-thumb"><img src="/assets/img/product/pro-large1.jpg" alt=""></div>
                                        <div class="p-thumb"><img src="/assets/img/product/pro-large2.jpg" alt=""></div>
                                        <div class="p-thumb"><img src="/assets/img/product/pro-large3.jpg" alt=""></div>
                                        <div class="p-thumb"><img src="/assets/img/product/pro-large4.jpg" alt=""></div>
                                    </div>
                                </div>    
                                <div class="col-md-6 col-12">
                                    <div class="details-content">
                                        <h2>Maude Accent Chair</h2>
                                        <div class="product-rating">
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                                        <div class="price-box">
                                            <span>$125.35 <del>$148.25</del></span>       
                                        </div>
                                        <div class="box-to-cart">
                                            <div class="control">
                                                <input value="1" type="number">
                                            </div>
                                            <a class="add" href="#">add to cart</a>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li><a href="wishlist.html"><i class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i>Add to compare</a></li>
                                            </ul>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div><!-- .modal-body -->
                    </div><!-- .modal-content -->
                </div><!-- .modal-dialog -->
            </div>
            <!-- END Modal -->
        </div>
        <!-- END QUICKVIEW PRODUCT -->
        <!--Start of Newsletter Form-->
        <div class="modal fade" id="newslettermodal" tabindex="-1" role="dialog">
            <div class="modal-dialog text-center" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">close</span></button>
                    <div class="newsletter-popup">
                        <form class="newsletter-content" method="post" action="#">
                            <h2>NEWSLETTER</h2>
                            <p>Subscribe to the Shopro mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                            <input type="text" placeholder="Enter your email address">
                            <button type="button">subscribe</button>
                            <div class="checkbox_newsletter">
                                <input type="checkbox" id="checkbox">
                                <label for="checkbox"> Don't show this popup again</label>
                            </div>
                        </form>
                    </div>	
                </div>	
            </div>
        </div>
        <!--End of Newsletter Form-->
        
        <script src="/assets/js/vendor/jquery-3.2.1.min.js"></script>
         <script src="/assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="/assets/js/popper.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/jquery.meanmenu.js"></script>
        <script src="/assets/js/ajax-mail.js"></script>
        <script src="/assets/js/owl.carousel.min.js"></script>
        <script src="/assets/js/jquery.countdown.min.js"></script>
        <script src="/assets/js/plugins.js"></script>
        <script src="/assets/js/main.js"></script>
    </body>
</html>
