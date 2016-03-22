@extends('admin.master')
@section('title','Danh sach san pham')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>List</small>
                    <a class="btn btn-success" href="{!!URL::route('admin.product.getAdd')!!}">Thêm mới</a>
                </h1>
                @include('admin.block.errors')
                @include('admin.block.msg')
            </div>

            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Màu</th>
                        <th>Sản xuất</th>
                        <th>Bảo hành</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Ảnh</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0 ?>
                    @foreach($products as $product)
                    <?php $i++ ?>
                    <tr class="odd gradeX" align="center">
                        <td>{!!$i!!}</td>
                        <td>{!!$product["name"]!!}</td>
                        <td>{!!$product["mau"]!!}</td>
                        <td>{!!$product["sanxuat"]!!}</td>
                        <td>{!!$product["baohanh"]!!}</td>
                        <td>{!!$product["soluong"]!!}</td>
                        <td>{!!$product["gia"]!!}</td>
                        <td><img style="width: 50px; height: 40px" alt="" src="{!!asset('resources/upload/'.$product["anh"])!!}"/> </td>
                        <td class="center"> <a class="btn btn-warning glyphicon glyphicon-pencil" href="{!!URL::route('admin.product.getEdit',$product["id"])!!}"> Edit</a></td>
                        <td class="center"><a class="btn btn-danger glyphicon glyphicon-trash" onclick="return xacNhan('Bạn co muốn xóa không?')" href="{!!URL::route('admin.product.getDelete',$product["id"])!!}"> Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection()