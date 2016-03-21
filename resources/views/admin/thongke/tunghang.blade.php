@extends('admin.master')    
@section('title','Sản phẩm bán chạy')
@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm bán chạy
                    <small>Thống kê</small>
                </h1>
            </div>
            <div class="col-lg-12">
                <img src="http://localhost:81/report/public/report/ban-cua-tung-hang" alt=""/>
                <h3>Bán chạy trong ngày
                </h3>
            </div>
            <br/>
            <br/>
            <br/>
            <div class="col-lg-12">
                <img src="http://localhost:81/report/public/report/ban-cua-tung-hang" alt=""/>
                <h3>Bán chạy trong 3 ngày
                </h3>
            </div>
            <br/>
            <div class="col-lg-12">
                <img src="http://localhost:81/report/public/report/ban-cua-tung-hang" alt=""/>
                <h3>Bán chạy 7 ngày
                </h3>

            </div>
            <br/>
            <div class="col-lg-12">
                <img src="http://localhost:81/report/public/report/ban-cua-tung-hang" alt=""/>
                <h3>Bán chạy trong tháng
                </h3>

            </div>
        </div>
    </div>
</div>
@endsection