@extends('user.master1')
@section('title','Giới thiệu công ty')
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
                <div class="group product clearfix">
                    <!--title-->
                    <div class="header2">
                        <span class="title">
                            <span>
                                <a href="javascript:0">Hình thức thanh toán</a>
                            </span>
                        </span>
                    </div>
                    <br/>
                    <div class="clear"></div> 
                </div>
                <a class="btn btn-primary" href="{{route('thanhToanTrucTiep')}}" style="width: 200px;height: 30px">Thanh toán trực tiếp</button>
                    <a href="{{route('tienHanhThanhToan')}}">
                        <img border="0" src="https://www.nganluong.vn/data/images/buttons/11.gif" /> 
                    </a>
            </section>
        </div>
    </div>
</section>
@endsection
