@extends('admin.master')
@section('title','Them phu kien')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Phụ kiện
                    <small>Thêm</small>
                </h1>
            </div>
            <div class="col-lg-12" style="padding-bottom:120px">
                @include('admin.block.errors')
                @include('admin.block.msg')
                <div class="col-lg-712" style="padding-bottom:120px">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{!!csrf_token()!!}"/>
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <select class="form-control" name="sl_tensp">
                                <option value="">Xin hãy chọn tên sản phẩm</option>
                                <?php select($products, old('sl_tensp')) ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Màn hình</label>
                            <textarea class="form-control" name="txtManhinh"  >{!!old('txtManhinh')!!}</textarea>
                            <script type="text/javascript">ckeditor("txtManhinh")</script>
                        </div>
                        <div class="form-group">
                            <label>Camera sau</label>
                            <textarea class="form-control" name="txtCamera_sau">{!!old('txtCamera_sau')!!}</textarea>
                            <script type="text/javascript">ckeditor("txtCamera_sau")</script>
                        </div>
                        <div class="form-group">
                            <label>Camera trước</label>
                            <textarea class="form-control" name="txtCamera_truoc" >{!!old('txtCamera_truoc')!!}</textarea>
                            <script type="text/javascript">ckeditor("txtCamera_truoc")</script>
                        </div>
                        <div class="form-group">
                            <label>Hệ điều hành - CPU</label>
                            <textarea class="form-control" name="txtHedieuhanh_CPU" >{!!old('txtHedieuhanh_CPU')!!}</textarea>
                            <script type="text/javascript">ckeditor("txtHedieuhanh_CPU")</script>
                        </div>
                        <div class="form-group">
                            <label>Bộ nhớ - Lưu trữ</label>
                            <textarea class="form-control" name="txtBonho_Luutru" >{!!old('txtBonho_Luutru')!!}</textarea>
                            <script type="text/javascript">ckeditor("txtBonho_Luutru")</script>
                        </div>
                        <div class="form-group">
                            <label>Kết nối</label>
                            <textarea class="form-control" name="txtKetnoi"  >{!!old('txtKetnoi')!!}</textarea>
                            <script type="text/javascript">ckeditor("txtKetnoi")</script>
                        </div>
                        <div class="form-group">
                            <label>Thiết kế -Trọng lượng</label>
                            <textarea class="form-control" name="txtThietke_Trongluong"  >{!!old('txtThietke_Trongluong')!!}</textarea>
                            <script type="text/javascript">ckeditor("txtThietke_Trongluong")</script>
                        </div>
                        <div class="form-group">
                            <label>Thông tin Pin</label>
                            <textarea class="form-control" name="txtThongtinpin"  >{!!old('txtThongtinpin')!!}</textarea>
                            <script type="text/javascript">ckeditor("txtThongtinpin")</script>
                        </div>
                        <div class="form-group">
                            <label>Giải trí - Ứng dụng</label>
                            <textarea class="form-control" name="txtGiaitri_Ungdung"  >{!!old('txtGiaitri_Ungdung')!!}</textarea>
                            <script type="text/javascript">ckeditor("txtGiaitri_Ungdung")</script>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm Mới</button>
                        <a class="btn btn-warning" href="{!!URL::route('admin.tinhnang.list')!!}">Hủy bỏ</a></td>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
                </div>  
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
@endsection