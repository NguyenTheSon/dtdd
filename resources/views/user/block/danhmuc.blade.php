<?php $menu = DB::table('loaisp')->orderBy('thutu')->get(); ?>

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <div id="pav-verticalmenu" class="box pav-verticalmenu highlighted hidden-xs hidden-sm">
        <div class="box-heading">
            <span>Danh mục</span>	
            <span class="shapes round"><em class="shapes bottom"></em></span>	
        </div>
        <div class="box-content">
            <div class="navbar navbar-default">
                <div id="verticalmenu" class="verticalmenu" role="navigation">
                    <div class="navbar-header">
                        <a href="javascript:;" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle">
                            <span class="icon-bar"></span>		        
                        </a>
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav verticalmenu">
                                @foreach($menu as $item)
                                <li>
                                    <a href="{!!URL::route('product.getListCate',$item->id)!!}" >
                                        <span class="menu-icon" style="background:url('http://localhost/dtdd/image/data/icon-verticalmenu/icon05.png') no-repeat;">
                                            <span class="menu-title">{!!$item->name!!}
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>					
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


