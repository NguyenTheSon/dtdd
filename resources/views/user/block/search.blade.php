<div id="search" class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
    <div class="input-group">
        <div class=" box search_box">
            <form method="get" action="{{route('search')}}">
                <input type="hidden" name="_token" value="{!!csrf_token()!!}"/>
                <div class="filter_type category_filter pull-left">
                    <span class="fa fa-caret-down"></span>
                    <select name="select_masp">
                        <?php $menu = DB::table('loaisp')->orderBy('thutu')->get(); ?>
                        <option value="0">Tất cả danh mục</option>
                        @foreach($menu as $item)
                        <option value="{!!$item->id!!}">{!!$item->name!!}</option>
                        @endforeach                      
                    </select>
                </div>
                <div id="search1" class="search pull-left">
                    <input type="text" name="tensp" autocomplete="off" placeholder="Bạn muốn tìm gì .." value="" class="input-search form-control">
                    <button type="submit" class="button-search fa fa-search"></button>
                </div>
            </form>
            <div class="clear clr"></div>
        </div>                                    														
    </div>						
</div>

