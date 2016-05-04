@extends('user.master1')
@section('title','Danh sách gợi ý')
@section('content')
<section id="columns">
    <div id="breadcrumb">
        <ol class="breadcrumb container">
        </ol>
    </div>
    <div class="container">
        <div class="row"> 
            <aside class="col-md-3">
                <div id="column-left" class="sidebar">
                    @include('user.block.danhmuc1')
                </div>
            </aside>
            <section class="col-md-9">
                <div id="content">
                    <h1>Danh sách gợi ý</h1>
                    <div class="product-filter clearfix">
                        <div class="display">
                            <span>Danh sách</span>
                            <span>Hiển thị:</span>
                            <a onclick="display('grid');"><i class="fa fa-th-large"></i>Lưới</a>
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
                                            <a class="img" href="{{route('getProductDetail',$item['id'])}}"><img class="img-responsive" src="{!!asset('resources/upload/'.$item['anh'])!!}" title="{!!$item['name']!!}" alt="{!!$item['name']!!}" /></a>							
                                            <!-- zoom image-->
                                            <a href="{!!asset('resources/upload/'.$item['anh'])!!}" class="btn btn-theme-default colorbox product-zoom" title="{!!$item['name']!!}"><i class="fa fa-search-plus"></i></a>
                                            <!-- Show Swap -->
                                            <!-- Show Swap -->
                                        </div>
                                        <div class="product-meta">		  
                                            <div class="left">
                                                <h3 class="name"><a href="{{route('getProductDetail',$item['id'])}}">{!!$item['name']!!}</a></h3>	
                                                <div class="price">
                                                    <span class="special-price">{!!number_format($item['gia'])!!} VNĐ</span>

                                                    <span class="price-tax">Trước thuế: {!!number_format($item['gia'])!!} VNĐ</span>
                                                </div>

                                            </div>

                                            <div class="right">		
                                                <div class="norating"><img alt="0" src="public/image/stars-0.png"></div>

                                                <p class="description">Chơi game hấp dẫn, lướt web thoải mái, xem video ấn tượng hơn với màn hình cỡ lớn 6 inch. Công nghệ .....</p>

                                                <div class="action">							
                                                    <div class="cart">						

                                                        <a href="{!! URL::route('muaHang',$item['id'])!!}" class="btn btn-shopping-cart">
                                                            <span>Thêm vào giỏ</span>
                                                        </a>
                                                    </div>

                                                    <div class="button-group">
                                                        <div class="compare">			
                                                            <a onclick="addToCompare('69');" title="Thêm so sánh" class="fa fa-refresh product-icon">
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
                        <div class="results">Hiển thị 1 đến {!!count($products)!!} trong {!!count($products)!!} ({!!count($products)!!} Trang)</div>
                    </div>
                    @else
                    <h3 class="text-center alert alert-info">Empty!</h3>
                    @endif
                </div>
                <script type="text/javascript">
                    <!--
                        function display(view) {
                        if (view == 'list') {
                            $('.product-grid').attr('class', 'product-list');

                            $('.products-block .product-block').each(function (index, element) {

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
                    //-->
                </script> 
            </section>
        </div>
    </div>
</section>
@endsection

