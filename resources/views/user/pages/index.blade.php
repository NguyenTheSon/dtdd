@extends('user.master')
@section('title','Thế giới Mobile')
@section('content')
<section id="pav-slideshow" class="pav-slideshow hidden-sm hidden-xs">
    <div class="container">
        <div class="row">
            @include('user.block.danhmuc')
            @include('user.block.slide')
        </div>
    </div>
</section>
<section id="columns">
    <div class="container">
        <div class="row">
            <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">         
                <div id="content">
                    <div class="content-top">
                        <div class="box producttabs">
                            <div class="tab-nav">
                                <ul class="nav nav-tabs" id="producttabs265">
                                    <li><a href="#tab-latest265" data-toggle="tab">Mới nhất</a></li>
                                    <li><a href="#tab-bestseller265" data-toggle="tab">Sản phẩm mua nhiều</a></li>
                                    <li><a href="#tab-mostviewed265" data-toggle="tab">Xem nhiều nhất</a></li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane box-products  tabcarousel265 slide" id="tab-latest265">

                                    <div class="carousel-controls">
                                        <a class="carousel-control left fa fa-angle-left" href="#tab-latest265"   data-slide="prev"></a>
                                        <a class="carousel-control right fa fa-angle-right" href="#tab-latest265"  data-slide="next"></a>
                                    </div>
                                    <div class="carousel-inner ">		

                                        <div class="item active">
                                            <div class="row box-product">
                                                <!--Mới nhất-->
                                                @foreach($sanPhamMoi as $item)
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 product-cols">
                                                    <div class="product-block">
                                                        <div class="image">
                                                            <a href="#">
                                                                <img class="img img-responsive" src="{!!asset('resources/upload/'.$item['anh'])!!}" alt="{!!$item['name']!!}" />
                                                            </a>
                                                            <!-- zoom image-->
                                                            <!-- Swap image -->
                                                        </div>
                                                        <div class="product-meta">	
                                                            <div class="name"><a href="{{route('getProductDetail',$item['id'])}}">{!!$item['name']!!}</a></div>
                                                            <div class="description">
                                                                Thiết kế sang trọng và hiện đại với mặt lưng họa tiết vân ...
                                                            </div>
                                                            <div class="price">
                                                                {!!number_format($item['gia'])!!} VNĐ										  										
                                                            </div>
                                                            <div class="norating"><img alt="0" src="public/image/stars-0.png"></div>
                                                            <div class="action">
                                                                <div class="cart">
                                                                    <a href="{!! URL::route('muaHang',$item['id'])!!}" class="btn btn-shopping-cart">
                                                                        <span>Thêm vào giỏ</span>
                                                                    </a>
                                                                </div>
                                                                <div class="button-group">                                                                    
                                                                    <div class="compare">			
                                                                        <a onclick="addToCompare('75');" title="Thêm so sánh" class="fa fa-refresh product-icon">
                                                                            <span>Thêm so sánh</span>
                                                                        </a>	
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="tab-pane box-products  tabcarousel265 slide" id="tab-bestseller265">

                                    <div class="carousel-controls">
                                        <a class="carousel-control left fa fa-angle-left" href="#tab-bestseller265"   data-slide="prev"></a>
                                        <a class="carousel-control right fa fa-angle-right" href="#tab-bestseller265"  data-slide="next"></a>
                                    </div>
                                    <div class="carousel-inner ">		

                                        <div class="item active">
                                            <div class="row box-product">
                                                <!--Mua nhiều-->
                                                @foreach($sanPhamBanChay as $item)
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 product-cols">
                                                    <div class="product-block">
                                                        <div class="image">
                                                            <a href="#">
                                                                <img class="img img-responsive" src="{!!asset('resources/upload/'.$item['anh'])!!}" alt="{!!$item['name']!!}" />
                                                            </a>
                                                            <!-- zoom image-->
                                                            <!-- Swap image -->
                                                        </div>
                                                        <div class="product-meta">	
                                                            <div class="name"><a href="{{route('getProductDetail',$item['id'])}}">{!!$item['name']!!}</a></div>
                                                            <div class="description">
                                                                Thiết kế sang trọng và hiện đại với mặt lưng họa tiết vân ...
                                                            </div>
                                                            <div class="price">
                                                                {!!number_format($item['gia'])!!} VNĐ										  										</div>
                                                            <div class="norating"><img alt="0" src="public/image/stars-0.png"></div>
                                                            <div class="action">
                                                                <div class="cart">
                                                                    <a href="{!! URL::route('muaHang',$item['id'])!!}" class="btn btn-shopping-cart">
                                                                        <span>Thêm vào giỏ</span>
                                                                    </a>
                                                                </div>
                                                                <div class="button-group">
                                                                    <div class="compare">			
                                                                        <a onclick="addToCompare('75');" title="Thêm so sánh" class="fa fa-refresh product-icon">
                                                                            <span>Thêm so sánh</span>
                                                                        </a>	
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="tab-pane box-products  tabcarousel265 slide" id="tab-mostviewed265">
                                    <div class="carousel-controls">
                                        <a class="carousel-control left fa fa-angle-left" href="#tab-mostviewed265"   data-slide="prev"></a>
                                        <a class="carousel-control right fa fa-angle-right" href="#tab-mostviewed265"  data-slide="next"></a>
                                    </div>
                                    <div class="carousel-inner ">
                                        <div class="item active">
                                            <div class="row box-product">
                                                Xem nhiều
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 product-cols">
                                                    <div class="product-block">
                                                        <div class="image">
                                                            <a href="http://localhost/dtdd/index.php?route=product/product&amp;product_id=75">
                                                                <img class="img img-responsive" src="http://localhost/dtdd/image/cache/data/samsung/samsung-galaxy-s5-h1-270x203.png" alt="Samsung Galaxy S5 G900" />
                                                            </a>
                                                            zoom image
                                                            Swap image 
                                                        </div>
                                                        <div class="product-meta">	
                                                            <div class="name"><a href="http://localhost/dtdd/index.php?route=product/product&amp;product_id=75">Samsung Galaxy S5 G900</a></div>
                                                            <div class="description">
                                                                Thiết kế sang trọng và hiện đại với mặt lưng họa tiết vân ...
                                                            </div>
                                                            <div class="price">
                                                                11.999.000 VNĐ										  										</div>
                                                            <div class="norating"><img alt="0" src="public/image/stars-0.png"></div>
                                                            <div class="action">
                                                                <div class="cart">
                                                                    <button onclick="addToCart('75');" class="btn btn-shopping-cart">
                                                                        <span>Thêm vào giỏ</span>
                                                                    </button>
                                                                </div>
                                                                <div class="button-group">
                                                                    <div class="compare">			
                                                                        <a onclick="addToCompare('75');" title="Thêm so sánh" class="fa fa-refresh product-icon">
                                                                            <span>Thêm so sánh</span>
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
                                </div>
                            </div>
                        </div>


                        <script>
                            $(function () {
                                $('#producttabs265 a:first').tab('show');
                            })
                            $('.tabcarousel265').carousel({interval: false, auto: false, pause: 'hover'});
                        </script>
                        <div class="box pav-custom  ">
                            <div class="box-content">
                                <div class="">
                                    <div class="banner-group hidden-xs hidden-sm">
                                        <div class="effect pull-left col-lg-5 col-sm-5"><a class="overlay" href="#">&nbsp;</a><img alt="" class="img-banner img-responsive no-border-right" src="image/data/banner/banner-iphone5s.png" style="height:220px;" /></div>

                                        <div class="effect pull-right col-lg-7 col-sm-7"><a class="overlay" href="http://localhost/dtdd/index.php?route=product/product&amp;path=64&amp;product_id=59">&nbsp;</a><img alt="" class="img-banner img-responsive" src="image/data/banner/samsung-galaxy-note-4-banner.jpg" style="height:220px;" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>			
                        <!-- AddThis Smart Layers BEGIN -->
                        <!-- Go to http://www.addthis.com/get/smart-layers to customize -->
                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js"></script>
                        <script type="text/javascript">
                            addthis.layers({
                                'theme': 'transparent',
                                'domain': 'mysite.com',
                                'linkFilter': function (link, layer) {
                                    console.log(link.title + ' - ' + link.url + " - " + layer);
                                    return link;
                                },
                                'responsive': {
                                    'maxWidth': '979px',
                                    'minWidth': '0px'
                                },
                                'share': {
                                    'position': 'right',
                                    'services': 'facebook,twitter,yahoomail,zingme,pinterest,more',
                                    'postShareTitle': 'Thanks for sharing!',
                                    'postShareFollowMsg': 'Follow us',
                                    'desktop': true,
                                    'mobile': true,
                                    'theme': 'transparent'
                                },
                                'follow': {
                                    'title': 'Follow',
                                    'postFollowTitle': 'Thanks for following!',
                                    'desktop': true,
                                    'mobile': true,
                                    'theme': 'transparent'
                                },
                                'mobile': {
                                    'buttonBarPosition': 'bottom',
                                    'buttonBarTheme': 'transparent',
                                    'mobile': true
                                }
                            });
                        </script>
                        <!-- AddThis Smart Layers BEGIN -->
                        <!-- Go to http://www.addthis.com/get/smart-layers to customize -->
                        <!--                        <div class="box featured ">
                                                    <div class="box-heading"><span>Sản phẩm nổi bật</span></div>
                                                    <div class="box-content">
                                                        <div class="box-products slide" id="productfeatured992545950">
                                                            <div class="featured-banner">
                                                            </div>
                                                            <div class="featured-products">
                                                                <div class="carousel-controls">
                                                                    <a class="carousel-control left fa fa-angle-left" href="#productfeatured992545950" data-slide="prev"></a>
                                                                    <a class="carousel-control right fa fa-angle-right" href="#productfeatured992545950" data-slide="next"></a>
                                                                </div>
                                                                <div class="carousel-inner">		
                        
                                                                    <div class="item active">
                                                                        <div class="row box-product">
                                                                            @foreach($sanPhamNoiBat as $item)
                                                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 product-cols">
                                                                                <div class="product-block">
                                                                                    <div class="image">
                                                                                        <a href=""><img class="img img-responsive" src="{!!asset('resources/upload/'.$item['anh'])!!}" alt="{!!$item['name']!!}" /></a>
                                                                                         zoom image
                        
                                                                                         Show Swap 
                                                                                         Show Swap 
                        
                        
                                                                                    </div>
                                                                                    <div class="product-meta">
                                                                                        <div class="name"><a href="{{route('getProductDetail',$item['id'])}}">{!!$item['name']!!}</a></div>
                                                                                        <div class="description">
                                                                                            Mặt lưng giả da, viền giả kim loại bao quanh máy được vát ...
                                                                                        </div>
                                                                                        <div class="price">
                                                                                            {!!number_format($item['gia'])!!} VNĐ													  													</div>
                                                                                        <div class="norating"><img alt="0" src="public/image/stars-0.png"></div>
                                                                                        <div class="action">
                                                                                            <div class="cart">
                                                                                                <a href="{!! URL::route('muaHang',$item['id'])!!}" class="btn btn-shopping-cart">
                                                                                                    <span>Thêm vào giỏ</span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <div class="button-group">
                                                                                                <div class="compare">			
                                                                                                    <a onclick="addToCompare('58');" title="Thêm so sánh" class="fa fa-refresh product-icon">
                                                                                                        <span>Thêm so sánh</span>
                                                                                                    </a>	
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                            </div> 
                                                        </div>
                                                    </div> 
                                                </div>-->
                        <div class="box featured ">
                            <div class="box-heading"><span>Phụ kiện điện thoại</span></div>
                            <div class="box-content">
                                <div class="box-products slide" id="productfeatured992545950">
                                    <div class="featured-banner">
                                    </div>
                                    <div class="featured-products">
                                        <div class="carousel-controls">
                                            <a class="carousel-control left fa fa-angle-left" href="#productfeatured992545950" data-slide="prev"></a>
                                            <a class="carousel-control right fa fa-angle-right" href="#productfeatured992545950" data-slide="next"></a>
                                        </div>
                                        <div class="carousel-inner">		

                                            <div class="item active">
                                                <div class="row box-product">
                                                    @foreach($phuKien as $item)
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 product-cols">
                                                        <div class="product-block">
                                                            <div class="image">
                                                                <a href=""><img class="img img-responsive" src="{!!asset('resources/upload/phukien/'.$item['anh'])!!}" alt="{!!$item['tenpk']!!}" /></a>
                                                                <!-- zoom image-->

                                                                <!-- Show Swap -->
                                                                <!-- Show Swap -->


                                                            </div>
                                                            <div class="product-meta">
                                                                <div class="name"><a href="{{route('getProductDetail',$item['id'])}}">{!!$item['tenpk']!!}</a></div>
                                                                <div class="description">
                                                                    {!!$item['mota']!!}
                                                                </div>
                                                                <div class="price">
                                                                    {!!number_format($item['gia'])!!} VNĐ													  													</div>
                                                                <div class="norating"><img alt="0" src="public/image/stars-0.png"></div>
                                                                <div class="action">
                                                                    <div class="cart">
                                                                        <a href="{!! URL::route('muaHang',$item['id'])!!}" class="btn btn-shopping-cart">
                                                                            <span>Thêm vào giỏ</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div> 
                                    </div> 
                                </div>
                            </div> 
                        </div>
                        <script>
                            $('#productfeatured992545950').carousel({interval: false, auto: false, pause: 'hover'});
                        </script>
                    </div>
                    <h1 style="display: none;">Thế giới Mobile</h1>
                    <div class="content-bottom"> 
                        <div class="box">
                            <div class="fb-like-box" data-href="https://www.facebook.com/pages/Th%E1%BA%BF-gi%E1%BB%9Bi-Mobile/1503084439946015" data-width="1171"  data-height="220" data-show-faces="1" data-stream="0" data-header="0" data-colorscheme="light" data-border-color=""></div>
                        </div>	

                        <div id="fb-root"></div>
                        <script>
                            if ($('.ocx-deal').length == 0) {
                                window.fbAsyncInit = function () {
                                    FB.init({
                                        status: true,
                                        cookie: true,
                                        xfbml: true
                                    });
                                };
                                // Load the SDK Asynchronously
                                (function (d) {
                                    var js, id = 'facebook-jssdk';
                                    if (d.getElementById(id)) {
                                        return;
                                    }
                                    js = d.createElement('script');
                                    js.id = id;
                                    js.async = true;
                                    js.src = "//connect.facebook.net/en_US/all.js";
                                    d.getElementsByTagName('head')[0].appendChild(js);
                                }(document));
                            }
                        </script>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
@include('user.block.vanchuyen')
@endsection




