
<!DOCTYPE html>
<html dir="ltr" class="ltr" lang="vi">
    <head>
        <!-- Subiz chat for website -->
        <script type='text/javascript'>window._sbzq || function (e) {
                e._sbzq = [];
                var t = e._sbzq;
                t.push(["_setAccount", 38434]);
                var n = e.location.protocol == "https:" ? "https:" : "http:";
                var r = document.createElement("script");
                r.type = "text/javascript";
                r.async = true;
                r.src = n + "//static.subiz.com/public/js/loader.js";
                var i = document.getElementsByTagName("script")[0];
                i.parentNode.insertBefore(r, i)
            }(window);
        </script>


        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
        <!-- Mobile viewport optimized: h5bp.com/viewport -->
        <meta name="viewport" content="width=device-width">
        <meta charset="UTF-8" />
        <title>@yield('title')</title>
        <base href="http://localhost/dtdd/" />
        <link href="http://localhost/dtdd/image/data/banner/Mobile-Blackberry-icon.png" rel="icon" />
        <link href="public/stylesheet/bootstrap.css" rel="stylesheet" />
        <link href="public/stylesheet/stylesheet.css" rel="stylesheet" />
        <link href="public/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
        <link href="public/stylesheet/animation.css" rel="stylesheet" />
        <link href="public/stylesheet/font-awesome.min.css" rel="stylesheet" />
        <link href="public/stylesheet/pavblog.css" rel="stylesheet" />
        <link href="public/stylesheet/pavmegamenu/style.css" rel="stylesheet" />
        <link href="public/stylesheet/pavautosearch.css" rel="stylesheet" />



        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <script type="text/javascript" src="public/javascript/jquery/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="public/javascript/jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>
        <script type="text/javascript" src="public/javascript/jquery/ui/external/jquery.cookie.js"></script>
        <script type="text/javascript" src="public/javascript/common.js"></script>
        <script type="text/javascript" src="public/javascript/common_1.js"></script>
        <script type="text/javascript" src="public/javascript/jquery/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="public/javascript/jquery/pavblog_script.js"></script>






        <!--[if lt IE 9]>
        <script src="catalog/view/javascript/html5.js"></script>
        <script src="catalog/view/javascript/respond.min.js"></script>
        <link rel="stylesheet" type="text/css" href="catalog/view/theme/lexus_superstore/stylesheet/ie8.css" />
        <![endif]-->


    </head>
    <body id="offcanvas-container" class="offcanvas-container layout-fullwidth fs page-pavblog-category ">
        <section id="page" class="offcanvas-pusher" role="main">
            <header id="header">
                <div id="topbar">
                    <div class="container">	
                        <div class="show-desktop hidden-sm hidden-xs">
                            <div class="quick-access pull-left">
                                <div class="login links">Chào mừng bạn đến với Website của T-Moble</div>
                            </div>
                            <div class="quick-top-link pull-right">
                                <ul class="links pull-left">								
                                    <li><a href="{{url('/gio-hang')}}"><i class="fa fa-bookmark"></i>Giỏ hàng</a></li>
                                    <li><a class="last" href="{{url('/hinh-thuc-thanh-toan')}}"><i class="fa fa-share"></i>Thanh toán</a></li>
                                </ul>	
                            </div>
                        </div>	
                    </div>
                </div>

                <div id="header-main">	
                    <div class="row">
                        <div class="container">
                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 logo inner">
                                <div id="logo-theme" class="logo-store">
                                    <a href="">
                                        <img src="image/data/banner/the-gioi-mobile.gif" title="Thế giới Mobile" alt="Thế giới Mobile" />
                                    </a>
                                </div>
                            </div>
                            @include('user.block.search')					

                            <div class="col-lg-2 col-md-2 shopping-cart inner hidden-xs hidden-sm">
                                <div class="cart-top">
                                    <div id="cart" class="clearfix btn-group">
                                        <div class="heading media">		
                                            <div class="pull-left">
                                                <a href="{{url('/gio-hang')}}" class="icon-cart fa fa-shopping-cart"></a>
                                            </div>
                                            <div class="cart-inner media-body">
                                                <h4><a href="{{url('/gio-hang')}}">Giỏ Hàng</a></h4>
                                            </div>
                                        </div>

                                        <div class="content dropdown-menu">
                                            <div class="empty">Giỏ hàng đang trống!</div>
                                        </div>  
                                    </div>							
                                </div>
                            </div>	
                        </div>
                    </div>
                </div>	

                <div class="custom-menu">
                    <div id="pav-mainnav">			
                        <div class="container">

                            <div class="pav-megamenu">
                                <div class="navbar navbar-default">
                                    <div id="mainmenutop" class="megamenu" role="navigation">
                                        <div class="navbar-header">
                                            <a class="navbar-toggle hidden-lg hidden-md" href="javascript:;" data-target=".navbar-collapse" data-toggle="collapse">
                                                <span class="fa fa-bars"></span>		        
                                            </a>
                                            <div class="collapse navbar-collapse navbar-ex1-collapse hidden-sm hidden-xs">
                                                <ul class="nav navbar-nav megamenu"><li class="home" >
                                                        <a href=""><span class="menu-title">Trang chủ</span></a></li><li class="" >
                                                        <a href="{{url('/gioi-thieu')}}"><span class="menu-title">Giới thiệu</span></a></li><li class="" >
                                                        <a href="{{url('/khuyen-mai')}}"><span class="menu-title">Khuyến mãi</span></a></li><li class="" >
                                                        <a href="{{url('/chinh-sach-bao-hanh')}}"><span class="menu-title">Chính sách bảo hành</span></a></li><li class="" >
                                                        <a href="{{url('/tin-tuc')}}"><span class="menu-title">Tin tức</span></a></li><li class="" >
                                                        <a href="{{url('/ho-tro-mua-hang')}}"><span class="menu-title">Hỗ trợ mua hàng</span></a></li></ul>				
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>				
                        </div>					
                    </div>
                </div>
            </header>
            <!--/**
            * sys-notification
            */-->
            <section id="sys-notification">
                <div class="container">
                    <div id="notification"></div>
                </div>
            </section>
            @yield('content')
            <footer id="footer">
                <div class="footer-top">			
                    <div class="container">
                        <div class="custom">
                            <div class="row">	
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"><div class="box pav-custom  ">
                                        <div class="box-content">
                                            <div class="">
                                                <div class="social"><span>Kết nối với chúng tôi</span>
                                                    <ul>
                                                        <li><a class="fa fa-facebook" href="#">&nbsp;</a></li>
                                                        <li><a class="fa fa-twitter" href="#">&nbsp;</a></li>
                                                        <li><a class="fa fa-google-plus" href="#">&nbsp;</a></li>
                                                        <li><a class="fa fa-pinterest" href="#">&nbsp;</a></li>
                                                        <li><a class="fa fa-rss" href="#">&nbsp;</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div>
                            </div>	
                        </div>
                    </div>		
                </div>
                <div class="footer-center">
                    <div class="container">
                        <div class="row">	
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><div class="box pav-custom  ">
                                    <div class="box-heading"><span>Thông tin cửa hàng</span></div>
                                    <div class="box-content">
                                        <div class="">
                                            <ul class="list">
                                                <li><a href="#"><i class="fa fa-stop">&nbsp;</i>Giới thiệu</a></li>
                                                <li><a href="#"><i class="fa fa-stop">&nbsp;</i>Chính sách bảo mật</a></li>
                                                <li><a href="#"><i class="fa fa-stop">&nbsp;</i>Điều khoản &amp; điều kiện</a></li>
                                                <li><a href="#"><i class="fa fa-stop">&nbsp;</i>Sơ đồ trang Web</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div></div>


                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><div class="box pav-custom  ">
                                    <div class="box-heading"><span>Tài khoản</span></div>
                                    <div class="box-content">
                                        <div class="">
                                            <ul class="list">
                                                <li><a href="#"><i class="fa fa-stop">&nbsp;</i>Tài khoản của tôi</a></li>
                                                <li><a href="#"><i class="fa fa-stop">&nbsp;</i>Lịch sử đơn hàng</a></li>
                                                <li><a href="#"><i class="fa fa-stop">&nbsp;</i>Danh sách yêu thích</a></li>
                                                <li><a href="#"><i class="fa fa-stop">&nbsp;</i>Blog</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div></div>


                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><div class="box pav-custom  ">
                                    <div class="box-heading"><span>Liên kết</span></div>
                                    <div class="box-content">
                                        <div class="">
                                            <ul class="list">
                                                <li class="first"><a href="#"><i class="fa fa-stop">&nbsp;</i>Thương hiệu</a></li>
                                                <li><a href="#"><i class="fa fa-stop">&nbsp;</i>Phiếu quà tặng</a></li>
                                                <li><a href="#"><i class="fa fa-stop">&nbsp;</i>Liên kết - Affiliates</a></li>
                                                <li class="last"><a href="#"><i class="fa fa-stop">&nbsp;</i>Khuyến mãi</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div></div>


                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><div class="box pav-custom  ">
                                    <div class="box-heading"><span>Liên hệ cửa hàng</span></div>
                                    <div class="box-content">
                                        <div class="">
                                            <p>Mọi thắc mắc khách hàng vui lòng liên hệ với cửa hàng tại địa chỉ sau.</p>

                                            <ul>
                                                <li><span class="fa fa-phone">&nbsp;</span><span>Phone: 0968.605.051</span></li>
                                                <li><span class="fa fa-envelope">&nbsp;</span><span>Email: zika9x@gmail.com</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <!--
                OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
                Please donate via PayPal to donate@opencart.com
                //-->
                <div id="powered">
                    <div class="container">
                        <div id="top"><a class="scrollup" href="#"><i class="fa fa-angle-up"></i>Top</a></div>
                        <div class="copyright pull-left">
                            Bản quyền của <a href="http://www.opencart.com">OpenCart</a><br /> Thế giới Mobile &copy; 2016. 
                            Designed by <a href="http://www.themelexus.com" title="themelexus - opencart themes clubs" target="_blank">ThemeLexus</a>
                        </div>	
                    </div>
                </div>
            </footer>
            <!--
            OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
            Please donate via PayPal to donate@opencart.com
            //-->

            <script type="text/javascript">
                $(document).ready(function () {
                    $("li:first-child").addClass('first');
                    $("li:last-child").addClass('last');
                    $(".box-product .row:last-child").addClass('last');
                    $("#image-additional a:last-child").addClass('last');
                    $(".product-items:last-child").addClass('last');
                    $('.product-cols:last-child').addClass('last');
                    $(".product-cols:first-child").addClass('first');
                    $(".product-grid div[class^='col-']:last-child").addClass('last');
                    $(".product-grid .row:last-child").addClass('last');
                    $(function () {
                        $('#header .links li').last().addClass('last');
                        $('.breadcrumb a').last().addClass('last');
                        $('.cart tr').eq(0).addClass('first');
                    });
                });
            </script>
        </section> 
    </body>
</html>