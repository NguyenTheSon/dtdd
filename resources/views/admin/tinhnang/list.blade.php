@extends('admin.master')
@section('title','Danh Sách tính năng')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm tính năng
                    <small>Danh sách</small>
                    <a class="btn btn-success" href="{!!URL::route('admin.tinhnang.getAdd')!!}">Thêm mới</a>
                </h1>
                @include('admin.block.errors')
                @include('admin.block.msg')
            </div>

            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên Sản phẩm</th>
                        <th>Màn hình</th>
                        <th>Camera sau</th>
                        <th>Camera trước</th>
                        <th>Hệ điều hành - CPU</th>                        
                        <th>Bộ nhớ - Lưu trữ</th>
                        <th>Kết nối</th>
                        <th>Thiết kế -Trọng lượng</th>                        
                        <th>Thông tin Pin</th>
                        <th>Giải trí - Ứng dụng</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0 ?>
                    @foreach($tinhNangs as $item)
                    <?php $i++ ?>
                    <tr class="odd gradeX" align="center" >
                        <td>{!!$i!!}</td>
                        <td>{!!$item->name!!}</td>
                        <td><table style="border-collapse: collapse;">{!!$item->manhinh!!}</table></td>
                        <td><table style="border-collapse: collapse;">{!!$item->camera_sau!!}</table></td>
                        <td><table style="border-collapse: collapse;">{!!$item->camera_truoc!!}</table></td>
                        <td><table style="border-collapse: collapse;">{!!$item->hedieuhanh_CPU!!}</table></td>
                        <td><table style="border-collapse: collapse;">{!!$item->bonho_luutru!!}</table></td>
                        <td><table style="border-collapse: collapse;">{!!$item->ketnoi!!}</table></td>
                        <td><table style="border-collapse: collapse;">{!!$item->thietke_trongluong!!}</table></td>
                        <td><table style="border-collapse: collapse;">{!!$item->thongtin_pin!!}</table></td>
                        <td><table style="border-collapse: collapse;">{!!$item->giaitri_ungdung!!}</table></td>
                        <td class="center"><a class="btn btn-warning glyphicon glyphicon-pencil" href="{!! URL::route('admin.tinhnang.getEdit',$item->id)!!}"> Edit</a></td>
                        <td class="center"><a class="btn btn-danger glyphicon glyphicon-trash" onclick="return xacNhan('Bạn có muốn xóa không?')" href="{!!URL::route('admin.tinhnang.getDelete',$item->id)!!}!!}"> Delete</a></td>                      
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