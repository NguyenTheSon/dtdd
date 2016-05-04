<div class="box latest">

    <div class="box-heading">
        <span>Mới nhất</span>
        <em class="line"></em>
    </div>  

    <div class="box-content">		
        <div class="row product-items">
            @foreach($sanPhamMoi as $item)
            <div class="col-lg-3 col-md-3 col-sm-3 product-cols">
                <div class="product-block">

                    <div class="image">
                        <a href="#"><img class=" img img-responsive" src="{!!asset('resources/upload/'.$item['anh'])!!}" alt="{!!$item['name']!!}" /></a>
                        <a href="{!!asset('resources/upload/'.$item['anh'])!!}" class="info-view colorbox product-zoom" rel="nofollow" title="{!!$item['name']!!}"><i class="fa fa-search-plus"></i></a>

                        <!-- Show Swap -->
                        <!-- end Show Swap -->


                    </div>

                    <div class="product-meta">
                        <div class="left">
                            <h3 class="name"><a href="{{route('getProductDetail',$item['id'])}}">{!!$item['name']!!}</a></h3>
                            <div class="price">
                                {!!number_format($item['gia'])!!} VNĐ													
                            </div>
                        </div>

                        <div class="right">		
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
            @endforeach
        </div>


    </div>	
</div>  			
<div id="banner0" class="box banner hidden-xs hidden-sm">
    <div><a href="http://www.bidv.com.vn/"><img src="http://localhost/dtdd/image/cache/data/banner/quang-cao-bidv-277x464.jpg" alt="banner " title="banner " class="img-responsive" /></a></div>
</div>
<script type="text/javascript"><!--
  $(document).ready(function () {
        $('#banner0 div:first-child').css('display', 'block');
    });

    var banner = function () {
        $('#banner0').cycle({
            before: function (current, next) {
                $(next).parent().height($(next).outerHeight());
            }
        });
    }

    setTimeout(banner, 2000);
    //-->
</script>	

