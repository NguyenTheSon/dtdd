@extends('user.master1')
@section('title','Tìm kiếm')
@section('content')
<section id="columns">
    <div id="breadcrumb">
        <ol class="breadcrumb container">
            <li><a href=""><span>Trang chủ</span></a></li>
            <li><a href=""><span>Tìm Kiếm</span></a></li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <section class="col-md-12">	
                <div id="content">                    
                    <h2>Sản phẩm thỏa điều kiện tìm kiếm</h2>
                    <div class="product-filter clearfix">
                        <div class="display">
                            <span>Danh sách</span>
                            <span>Hiển thị:</span>
                            <a onclick="display('grid');"><i class="fa fa-th-large"></i>Lưới</a>
                        </div>

                        <div class="product-compare"><a href="" id="compare-total" class="btn btn-compare btn-theme-default">So sánh sản phẩm (0)</a></div>   

                        <div class="sort"><span>Sắp xếp theo:</span>
                            <select onchange="location = this.value;">
                                <option value="1">Mặc định</option>
                                <option value="">Tên (A - Z)</option>
                                <option value="">Tên (Z - A)</option>
                                <option value="" selected="selected">Giá (Thấp &gt; Cao)</option>
                                <option value="">Giá (Cao &gt; Thấp)</option>
                                <option value="">Bình chọn (Cao nhất)</option>
                                <option value="">Bình chọn (Thấp nhất)</option>
                                <option value="">Kiểu (A - Z)</option>
                                <option value="">Kiểu (Z - A)</option>
                            </select>
                        </div>
                        <div class="limit"><span>Hiển thị:</span>
                            <select onchange="location = this.value;">
                                <option value="" selected="selected">9</option>
                                <option value="">25</option>
                                <option value="">50</option>
                                <option value="">75</option>
                                <option value="">100</option>
                            </select>
                        </div>
                    </div>
                    @if(count($products) > 0)
                    <div class="product-list"> 
                        <div class="products-block">
                            <div class="row product-items">
                                @foreach($products as $item)
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-1 product-cols">			
                                    <div class="product-block">	
                                        <div class="image">
                                            <a class="img" href="{{route('getProductDetail',$item->id)}}"><img class="img-responsive" src="{!!asset('resources/upload/'.$item->anh)!!}" title="{!!$item->name!!}" alt="{!!$item->name!!}" /></a>								
                                            <!-- zoom image-->
                                            <a href="{!!asset('resources/upload/'.$item->anh)!!}" class="btn btn-theme-default colorbox product-zoom" title="{!!$item->name!!}"><i class="fa fa-search-plus"></i></a>


                                            <!-- Show Swap -->
                                            <!-- Show Swap -->



                                        </div>

                                        <div class="product-meta">		  
                                            <div class="left">
                                                <h3 class="name"><a href="{{route('getProductDetail',$item->id)}}">{!!$item->name!!}</a></h3>	
                                                <div class="price">
                                                    <span class="special-price">{!!number_format($item->gia)!!} VNĐ</span>

                                                    <span class="price-tax">Trước Thuế: {!!number_format($item->gia)!!} VNĐ</span>
                                                </div>

                                            </div>

                                            <div class="right">		
                                                <div class="norating"><img alt="0" src="public/image/stars-0.png"></div>

                                                <p class="description">Màn hình 5.7 inch công nghệ Super AMOLED, chuẩn 2K siêu nét, màu sắc trung thực, sống động gấp 4 lần.....</p>

                                                <div class="action">							
                                                    <div class="cart">						

                                                        <a href="{!! URL::route('muaHang',$item->id)!!}" class="btn btn-shopping-cart">
                                                            <span>Thêm vào giỏ</span>
                                                        </a>
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
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="pagination paging clearfix">
                        <div class="results">Hiển thị 1 đến 3 trong 3 (1 Trang)</div>
                    </div>					
                    @else
                    <h3 class="text-center alert alert-info">Empty!</h3>
                    @endif
                </div>
                <script type="text/javascript">
                        function display(view) {
                        if (view == 'list') {
                            $('.product-grid').attr('class', 'product-list');

                            $('.products-block  .product-block').each(function (index, element) {

                                $(element).parent().addClass("col-fullwidth");
                            });

                            $('.display').html('<span style="float: left;">Hiển thị:</span><a class="list active"><em>Danh sách</em></a><a class="grid" onclick="display(\'grid\');"><em>Lưới</em></a>');

                            $.totalStorage('display', 'list');
                        } else {
                            $('.product-list').attr('class', 'product-grid');

                            $('.products-block  .product-block').each(function (index, element) {
                                $(element).parent().removeClass("col-fullwidth");
                            });
                            $('.display').html('<span style="float: left;">Hiển thị:</span><a class="list" onclick="display(\'list\');"><em>Danh sách</em></a><a class="grid active"><em>Lưới</em></a>');
                            $.totalStorage('display', 'grid');
                        }
                    }

                    view = $.totalStorage('display');

                    if (view) {
                        display(view);
                    } else {
                        display('grid');
                    }
                </script>
            </section>
        </div>
    </div>
</section>
@endsection