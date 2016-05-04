@extends('user.master2')
@section('title','Chi tiết sản phẩm')
@section('content')
<section id="columns">
    <div id="breadcrumb"><ol class="breadcrumb container">
            <li><a href="#"><span>Trang chủ</span></a></li>
            <li><a href="#"><span>{!!$tenLoai!!}</span></a></li>
            <li><a href="#"><span>{!!$product->name!!}</span></a></li>
        </ol></div><div class="container">
        <div class="row">
            <section class="col-md-12">  
                <div id="content" class="product-detail">
                    <div class="content-top">
                        <div class="box">
                            <div class="box-heading"></div>
                            <div class="box-content" style="text-align: center;">
                                <img src='http://chart.apis.google.com/chart?chs=160x160&cht=qr&chld=L|0&chl=http%3A%2F%2F%3Froute%3Dproduct%2Fproduct%26product_id%3D' border='0'/>	  </div>
                            <div class="bottom">&nbsp;</div>
                        </div>
                    </div>

                    <div class="product-info">
                        <div class="row">			
                            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 image-container">
                                <div class="image">
                                    <a href="{!!asset('resources/upload/'.$product['anh'])!!}" title="{!!$product->name!!}" class="colorbox">
                                        <img src="{!!asset('resources/upload/'.$product['anh'])!!}" title="{!!$product->name!!}" alt="{!!$product->name!!}" id="image"  data-zoom-image="{!!asset('resources/upload/'.$product['anh'])!!}" class="product-image-zoom img-responsive"/>
                                    </a>
                                </div>
                                <div class="image-additional slide carousel" id="image-additional">
                                    <div id="image-additional-carousel" class="carousel-inner">
                                        <div class="item clearfix">
                                            @if (count($img) > 0)
                                            @foreach($img as $item)
                                            <a href="{!!asset('resources/upload/detail/'.$item->anh)!!}" title="{!!$product->name!!}" class="colorbox" data-zoom-image="{!!asset('resources/upload/detail/'.$item->anh)!!}" data-image="{!!asset('resources/upload/detail/'.$item->anh)!!}">
                                                <img src="{!!asset('resources/upload/detail/'.$item->anh)!!}" style="max-width:100px;"  title="{!!$product->name!!}" alt="{!!$product->name!!}" data-zoom-image="{!!asset('resources/upload/detail/'.$item->anh)!!}" class="product-image-zoom img-responsive" />
                                            </a>                                            
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#image-additional" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <a class="right carousel-control" href="#image-additional" data-slide="prev">							
                                        <i class="fa fa-angle-left"></i>
                                    </a>

                                </div>			
                                <script type="text/javascript">
                                    $('#image-additional .item:first').addClass('active');
                                    $('#image-additional').carousel({interval: false});
                                </script>
                            </div>

                            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 product-view">	
                                <form action="{!! URL::route('muaHang',$product->id)!!}" method="get" enctype="multipart/form-data" role="form">
                                    <input name="_token" type="hidden" value="{!!csrf_token()!!}"/>
                                    <h1>{!!$product->name!!}</h1>
                                    <div class="review">
                                        <div><img src="public/image/stars-0.png" alt="0 đánh giá" />&nbsp;&nbsp;<a onclick="$('a[href=\'#tab-review\']').trigger('click');"><div id="fb-root"></div> đánh giá</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a onclick="$('a[href=\'#tab-review\']').trigger('click');">Viết đánh giá</a></div>
                                    </div>
                                    <div class="share">
                                        <!-- AddThis Button END --> 				
                                        <div class="addthis_default_style"><a class="addthis_button_compact">Chia sẻ</a> <a class="addthis_button_email"></a><a class="addthis_button_print"></a> <a class="addthis_button_facebook"></a> <a class="addthis_button_twitter"></a></div>
                                        <script type="text/javascript" src="//s7.addthis.com/js/250/addthis_widget.js"></script> 
                                        <!-- AddThis Button BEGIN -->
                                    </div>	
                                    <div class="description">
                                        <p>
                                            <i class="fa fa-chevron-down"></i>
                                            <b>Nhà sản xuất:</b>
                                            <a href="#">{!!$tenLoai!!}</a>								
                                        </p>	
                                        <p>
                                            <i class="fa fa-chevron-down"></i>
                                            <b>Kho hàng:</b>
                                            @if($product->soluong > 0 )Còn hàng
                                            @else Hết hàng
                                            @endif						
                                        </p>
                                        <p>
                                            <i class="fa fa-chevron-down"></i>
                                            <b>Màu sản phẩm:</b>
                                            <span>{!!$product->mau!!}</span>							
                                        </p>
                                        <p>
                                            <i class="fa fa-chevron-down"></i>
                                            <b>Tình trạng sản phẩm:</b>
                                            <span>{!!$product->trang_thai!!}</span>							
                                        </p>
                                        <p>
                                            <i class="fa fa-chevron-down"></i>
                                            <b>Bảo hành:</b>
                                            <span>{!!$product->baohanh!!}</span>							
                                        </p>
                                    </div>
                                    <div class="price">
                                        <div class="price-gruop">
                                            <span class="text-price">Giá:</span>
                                            {!!number_format($product['gia'])!!} VNĐ													</div>	
                                        <div class="other-price">
                                            <span class="price-tax">Trước Thuế: {!!number_format($product['gia'])!!} VNĐ</span><br/>
                                        </div>						
                                    </div>
                                    <div class="product-extra">
                                        <div class="quantity-adder pull-left">
                                            <div class="quantity-number pull-left">
                                                <input type="text" name="quantity" size="2" value="1" />
                                            </div>
                                            <div class="quantity-wrapper pull-left">
                                                <span class="add-up add-action fa fa-plus"></span> 
                                                <span class="add-down add-action fa fa-minus"></span>
                                            </div>					
                                            <input type="hidden" name="product_id" value="58" />	
                                        </div>
                                        <div class="cart pull-left">					
                                                <!-- <input type="button" value="" id="button-cart" class="button btn btn-theme-default" /> -->
                                            <input type="submit" id="button-cart" class="btn btn-shopping-cart" value="Thêm vào giỏ" />
                                        </div>
                                        <div class="action pull-left">                                            
                                            <div class="pull-left">
                                                <a class="compare btn btn-theme-default" onclick="addToCompare('58');">							
                                                    Thêm so sánh								
                                                </a>
                                            </div>
                                        </div>
                                        <!-- <span>&nbsp;&nbsp;&nbsp;&nbsp;</span> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-group box row-fuild">
                        <div id="tabs" class="htabs col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <ul class="nav nav-tabs clearfix">
                                <li><a href="#tab-description">Mô tả</a></li>			
                                <li><a href="#tab-attribute">Đặc tính</a></li>		

                                <li><a href="#tab-review">Đánh giá</a></li>


                            </ul>			
                        </div>
                        <div class="tab-content col-lg-9 col-md-9 col-sm-9 col-xs-12"> 
                            <div id="tab-description">
                                {!!$product->mo_ta!!}
                            </div>

                            <div id="tab-attribute" class=" no-margin table-responsive">
                                <table class="attribute table">
                                    <thead>
                                        <tr>
                                            <td colspan="2" style="color: red; background: #e9e9e9">Màn hình</td>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        {!!$tinhNang->manhinh!!}
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <td colspan="2" style="color: red; background: #e9e9e9">Camera sau</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {!!$tinhNang->camera_sau!!}
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <td colspan="2" style="color: red; background: #e9e9e9">Camera trước</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {!!$tinhNang->camera_truoc!!}
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <td colspan="2" style="color: red; background: #e9e9e9">Hệ điều hành - CPU</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {!!$tinhNang->hedieuhanh_CPU!!}
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <td colspan="2" style="color: red; background: #e9e9e9">Bộ nhớ &amp; lưu trữ</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {!!$tinhNang->bonho_luutru!!}
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <td colspan="2" style="color: red; background: #e9e9e9">Kết nối</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {!!$tinhNang->ketnoi!!}
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <td colspan="2" style="color: red; background: #e9e9e9">Thiết kế &amp; trọng lượng</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {!!$tinhNang->thietke_trongluong!!}
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <td colspan="2" style="color: red; background: #e9e9e9">Thông tin Pin</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {!!$tinhNang->thongtin_pin!!}
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <td colspan="2" style="color: red; background: #e9e9e9">Giải trí &amp; Ứng dụng</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {!!$tinhNang->giaitri_ungdung!!}
                                    </tbody>
                                </table>
                            </div>


                            <div id="tab-review" class="no-margin">
                                <p class="title">Bình luận, đánh giá</p>
                                <div id="fb-root"></div>
                                <script>(function (d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id))
                                            return;
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=984724398268673";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>


                                <div class="fb-comments" data-href="{!!Request::url()!!}" data-width="750" data-numposts="5"></div>



                                <script type="text/javascript">
                                    $(document).ready(function () {

                                        $("#btncomment").button({
                                            icons: {primary: 'ui-icon-circle-check'},
                                            text: true
                                        }).click(function () {
                                            $.get(encodeURI("/HomeMobile.aspx/AddReview?mobileid=1256"), function (data) {
                                                $("#comment-form").html(data);
                                            });
                                        });
                                        $.post("/HomeMobile.aspx/ListComment?mobileid=1256&amp;page=1", function (data) {
                                            $("#comment-container").html(data);
                                        });
                                    });</script>
                                <div style="display: inline-block;width: 100%;" id="comment-form"></div>
                            </div>



                        </div> 

                    </div>

                    <div class="box product-related clearfix">	
                        <div class="box-heading"><span>Sản phẩm liên quan (2)</span></div>
                        <div id="related" class="slide row-fuild" data-interval="0">
                            <div class="box-content carousel-inner">

                                <div class="item active">
                                    <div class="box-product">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 product-cols">
                                            <div class="product-block">
                                                <div class="image">
                                                    <a class="img" href="http://localhost/shop/index.php?route=product/product&amp;product_id=59"><img class="img-responsive" src="http://localhost/shop/image/cache/data/samsung/samsung-galaxy-note-4-h1-270x203.png" alt="Samsung Galaxy Note 4" /></a>


                                                    <!-- zoom image-->
                                                    <a href="http://localhost/shop/image/data/samsung/samsung-galaxy-note-4-h1.png" id="colorbox_59" class="btn btn-theme-default product-zoom related-colorbox" title="Samsung Galaxy Note 4"><i class="fa fa-search-plus"></i></a>

                                                    <!-- Show Swap -->
                                                    <!-- Show Swap -->


                                                </div>
                                                <div class="product-meta">
                                                    <div class="name"><a href="#">Samsung Galaxy Note 4</a></div>
                                                    <div class="description">

                                                    </div>
                                                    <div class="price">
                                                        17.990.000 VNĐ						  						</div>
                                                    <div class="norating"><img alt="0" src="public/image/stars-0.png"></div>
                                                    <div class="action">
                                                        <div class="cart">
                                                            <button onclick="addToCart('59');" class="btn btn-shopping-cart">
                                                                <span>Thêm vào giỏ</span>
                                                            </button>
                                                        </div>
                                                        <div class="button-group">
                                                            <div class="wishlist">
                                                                <a onclick="addToWishList('59');" title="Thêm Yêu thích" class="fa fa-heart product-icon">
                                                                    <span>Thêm Yêu thích</span>
                                                                </a>	
                                                            </div>
                                                            <div class="compare">			
                                                                <a onclick="addToCompare('59');" title="Thêm so sánh" class="fa fa-refresh product-icon">
                                                                    <span>Thêm so sánh</span>
                                                                </a>	
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 product-cols">
                                            <div class="product-block">
                                                <div class="image">
                                                    <a class="img" href="http://localhost/shop/index.php?route=product/product&amp;product_id=75"><img class="img-responsive" src="http://localhost/shop/image/cache/data/samsung/samsung-galaxy-s5-h1-270x203.png" alt="Samsung Galaxy S5 G900" /></a>


                                                    <!-- zoom image-->
                                                    <a href="http://localhost/shop/image/data/samsung/samsung-galaxy-s5-h1.png" id="colorbox_75" class="btn btn-theme-default product-zoom related-colorbox" title="Samsung Galaxy S5 G900"><i class="fa fa-search-plus"></i></a>

                                                    <!-- Show Swap -->
                                                    <!-- Show Swap -->


                                                </div>
                                                <div class="product-meta">
                                                    <div class="name"><a href="http://localhost/shop/index.php?route=product/product&amp;product_id=75">Samsung Galaxy S5 G900</a></div>
                                                    <div class="description">
                                                        <b>Notice</b>: Undefined index: description in <b>D:\Xampp\htdocs\shop\catalog\view\theme\lexus_superstore\template\product\product_related.tpl</b> on line <b>67</b>...
                                                    </div>
                                                    <div class="price">
                                                        11.999.000 VNĐ						  						</div>
                                                    <div class="norating"><img alt="0" src="public/image/stars-0.png"></div>
                                                    <div class="action">
                                                        <div class="cart">
                                                            <button onclick="addToCart('75');" class="btn btn-shopping-cart">
                                                                <span>Thêm vào giỏ</span>
                                                            </button>
                                                        </div>
                                                        <div class="button-group">
                                                            <div class="wishlist">
                                                                <a onclick="addToWishList('75');" title="Thêm Yêu thích" class="fa fa-heart product-icon">
                                                                    <span>Thêm Yêu thích</span>
                                                                </a>	
                                                            </div>
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

                <script type="text/javascript" src="public/javascript/jquery/elevatezoom/elevatezoom-min.js"></script>
                <script type="text/javascript">
                                                                    $("#image").elevateZoom({gallery: 'image-additional-carousel', cursor: 'pointer', galleryActiveClass: 'active'});

                </script>

                <script type="text/javascript">
                    <!--
                    $(document).ready(function () {
                        $('.colorbox').colorbox({
                            overlayClose: true,
                            opacity: 0.5,
                            rel: "colorbox"
                        });
                    });
                    //-->
                </script> 

                <script type="text/javascript">
                    <!--
               $('select[name="profile_id"], input[name="quantity"]').change(function () {
                        $.ajax({
                            url: 'index.php?route=product/product/getRecurringDescription',
                            type: 'post',
                            data: $('input[name="product_id"], input[name="quantity"], select[name="profile_id"]'),
                            dataType: 'json',
                            beforeSend: function () {
                                $('#profile-description').html('');
                            },
                            success: function (json) {
                                $('.success, .warning, .attention, information, .error').remove();

                                if (json['success']) {
                                    $('#profile-description').html(json['success']);
                                }
                            }
                        });
                    });

                    $('#button-cart').bind('click', function () {
                        $.ajax({
                            url: 'index.php?route=checkout/cart/add',
                            type: 'post',
                            data: $('.product-info input[type=\'text\'], .product-info input[type=\'hidden\'], .product-info input[type=\'radio\']:checked, .product-info input[type=\'checkbox\']:checked, .product-info select, .product-info textarea'),
                            dataType: 'json',
                            success: function (json) {
                                $('.success, .warning, .attention, information, .error').remove();

                                if (json['error']) {
                                    if (json['error']['option']) {
                                        for (i in json['error']['option']) {
                                            $('#option-' + i).after('<span class="error">' + json['error']['option'][i] + '</span>');
                                        }
                                    }

                                    if (json['error']['profile']) {
                                        $('select[name="profile_id"]').after('<span class="error">' + json['error']['profile'] + '</span>');
                                    }
                                }

                                if (json['success']) {
                                    $('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<img src="catalog/view/theme/lexus_superstore/image/close.png" alt="" class="close" /></div>');

                                    $('.success').fadeIn('slow');

                                    $('#cart-total').html(json['total']);

                                    $('#cart #cart-total').html(json['total']);

                                    $('html, body').animate({scrollTop: 0}, 'slow');
                                }
                            }
                        });
                    });
                    //-->
                </script>


                <script type="text/javascript">
                    <!--
                    $('#review .pagination a').live('click', function () {
                        $('#review').fadeOut('slow');

                        $('#review').load(this.href);

                        $('#review').fadeIn('slow');

                        return false;
                    });

                    $('#review').load('index.php?route=product/product/review&product_id=58');

                    $('#button-review').bind('click', function () {
                        $.ajax({
                            url: 'index.php?route=product/product/write&product_id=58',
                            type: 'post',
                            dataType: 'json',
                            data: 'name=' + encodeURIComponent($('input[name=\'name\']').val()) + '&text=' + encodeURIComponent($('textarea[name=\'text\']').val()) + '&rating=' + encodeURIComponent($('input[name=\'rating\']:checked').val() ? $('input[name=\'rating\']:checked').val() : '') + '&captcha=' + encodeURIComponent($('input[name=\'captcha\']').val()),
                            beforeSend: function () {
                                $('.success, .warning').remove();
                                $('#button-review').attr('disabled', true);
                                $('#review-title').after('<div class="attention"><img src="catalog/view/theme/lexus_superstore/image/loading.gif" alt="" /> Vui lòng đợi!</div>');
                            },
                            complete: function () {
                                $('#button-review').attr('disabled', false);
                                $('.attention').remove();
                            },
                            success: function (data) {
                                if (data['error']) {
                                    $('#review-title').after('<div class="warning">' + data['error'] + '</div>');
                                }

                                if (data['success']) {
                                    $('#review-title').after('<div class="success">' + data['success'] + '</div>');

                                    $('input[name=\'name\']').val('');
                                    $('textarea[name=\'text\']').val('');
                                    $('input[name=\'rating\']:checked').attr('checked', '');
                                    $('input[name=\'captcha\']').val('');
                                }
                            }
                        });
                    });
                    //-->
                </script> 

                <script type="text/javascript">
                    <!--
                    $('#tabs a').tabs();
                    //-->
                </script> 

                <script type="text/javascript" src="public/javascript/jquery/ui/jquery-ui-timepicker-addon.js"></script> 
                <script type="text/javascript">
                    <!--
                    $(document).ready(function () {
                        if ($.browser.msie && $.browser.version == 6) {
                            $('.date, .datetime, .time').bgIframe();
                        }

                        $('.date').datepicker({dateFormat: 'yy-mm-dd'});
                        $('.datetime').datetimepicker({
                            dateFormat: 'yy-mm-dd',
                            timeFormat: 'h:m'
                        });
                        $('.time').timepicker({timeFormat: 'h:m'});
                    });
                    //-->
                </script> 
            </section>


        </div></div>

</section>
@endsection
