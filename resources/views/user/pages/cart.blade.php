@extends('user.master')
@section('title','Chi tiết sản phẩm')
@section('content')
<section id="columns">
    <div id="breadcrumb">
        <ol class="breadcrumb container">
            <li><a href=""><span>Trang chủ</span></a></li>
            <li><a href="#"><span>Giỏ Hàng</span></a></li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="content">
                    <h1>
                        Giỏ Hàng
                    </h1>
                    <div class="checkout wrapper no-margin">
                        
                        <div class="warning">Sản phẩm đánh dấu *** không có đủ số lượng trong kho!<img src="public/image/close.png" alt="" class="close" /></div>
                        <div class="cart-info table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td class="image">Hình ảnh</td>
                                        <td class="name">Tên sản phẩm</td>
                                        <td class="quantity">Số lượng</td>
                                        <td class="price">Đơn Giá</td>
                                        <td class="total">Tổng cộng</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($content as $item)
                                <form method="POST" action="{!!URL::route('updateGioHang',$item->rowid)!!}">
                                    <input name="_token" type="hidden" value="{!!csrf_token()!!}" />
                                    <tr>
                                        <td class="image" data-label="Hình ảnh">
                                            <a href="">
                                                <img src="{!!asset('resources/upload/'.$item['options']['image'])!!}" style="width: 70px; height: 50px;" alt="{{$item['name']}}" title="{{$item['name']}}" />
                                            </a>
                                        </td>
                                        <td class="name" data-label="Tên sản phẩm">
                                            <a href="#">
                                                {{$item['name']}}									
                                            </a>
                                            <span class="stock">***</span>
                                            <div class="cart-option">
                                            </div>
                                        </td>
                                        <td class="quantity" data-label="Số lượng" >
                                            <input type="text" name="quantity" size="2" value="{{$item['qty']}}" />                                                
                                            &nbsp;
                                            <input type="image" src="public/image/update.png" alt="Cập nhật" title="Cập nhật" />
                                            &nbsp;<a href="{!!URL::route('xoaSP',$item['rowid'])!!}"><img src="public/image/remove.png" alt="Loại bỏ" title="Loại bỏ" /></a>
                                        </td>
                                        <td class="price" data-label="Đơn Giá"  >{{number_format($item['price'])}} VNĐ</td>
                                        <td class="total" data-label="Tổng cộng"  >{{number_format($item['qty']*$item['price'])}} VNĐ</td>
                                    </tr>
                                </form>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="wrapper-cart-total">
                            <div class="cart-total clearfix">
                                <table id="total">
                                    <tr>
                                        <td class="right"><b>Tổng cộng ::</b></td>
                                        <td class="right">{{number_format(Cart::total())}} VNĐ</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="buttons">
                        <div class="right"><a href="#" class="button btn btn-theme-default" data-toggle="modal" data-target="#myModal">Đặt hàng</a></div>
                        <div class="left"><a href="http://localhost/dtdd" class="button btn btn-theme-default">Tiếp tục mua hàng</a></div>
                    </div>
                </div>
<!--                <script type="text/javascript">
                    
                $('#button-quote').live('click', function () {
                        $.ajax({
                            url: 'index.php?route=checkout/cart/quote',
                            type: 'post',
                            data: 'country_id=' + $('select[name=\'country_id\']').val() + '&zone_id=' + $('select[name=\'zone_id\']').val() + '&postcode=' + encodeURIComponent($('input[name=\'postcode\']').val()),
                            dataType: 'json',
                            beforeSend: function () {
                                $('#button-quote').attr('disabled', true);
                                $('#button-quote').after('<span class="wait">&nbsp;<img src="catalog/view/theme/lexus_superstore/image/loading.gif" alt="" /></span>');
                            },
                            complete: function () {
                                $('#button-quote').attr('disabled', false);
                                $('.wait').remove();
                            },
                            success: function (json) {
                                $('.success, .warning, .attention, .error').remove();

                                if (json['error']) {
                                    if (json['error']['warning']) {
                                        $('#notification').html('<div class="warning" style="display: none;">' + json['error']['warning'] + '<img src="catalog/view/theme/lexus_superstore/image/close.png" alt="" class="close" /></div>');

                                        $('.warning').fadeIn('slow');

                                        $('html, body').animate({scrollTop: 0}, 'slow');
                                    }

                                    if (json['error']['country']) {
                                        $('select[name=\'country_id\']').after('<span class="error">' + json['error']['country'] + '</span>');
                                    }

                                    if (json['error']['zone']) {
                                        $('select[name=\'zone_id\']').after('<span class="error">' + json['error']['zone'] + '</span>');
                                    }

                                    if (json['error']['postcode']) {
                                        $('input[name=\'postcode\']').after('<span class="error">' + json['error']['postcode'] + '</span>');
                                    }
                                }

                                if (json['shipping_method']) {
                                    html = '<h2>Xin vui lòng lựa chọn phương thức vận chuyển ưa thích cho đơn hàng này.</h2>';
                                    html += '<form action="http://localhost/shop/index.php?route=checkout/cart" method="post" enctype="multipart/form-data" role="form">';
                                    html += '  <table class="radio">';

                                    for (i in json['shipping_method']) {
                                        html += '<tr>';
                                        html += '  <td colspan="3"><b>' + json['shipping_method'][i]['title'] + '</b></td>';
                                        html += '</tr>';

                                        if (!json['shipping_method'][i]['error']) {
                                            for (j in json['shipping_method'][i]['quote']) {
                                                html += '<tr class="highlight">';

                                                if (json['shipping_method'][i]['quote'][j]['code'] == '') {
                                                    html += '<td><input type="radio" name="shipping_method" value="' + json['shipping_method'][i]['quote'][j]['code'] + '" id="' + json['shipping_method'][i]['quote'][j]['code'] + '" checked="checked" /></td>';
                                                } else {
                                                    html += '<td><input type="radio" name="shipping_method" value="' + json['shipping_method'][i]['quote'][j]['code'] + '" id="' + json['shipping_method'][i]['quote'][j]['code'] + '" /></td>';
                                                }

                                                html += '  <td><label for="' + json['shipping_method'][i]['quote'][j]['code'] + '">' + json['shipping_method'][i]['quote'][j]['title'] + '</label></td>';
                                                html += '  <td style="text-align: right;"><label for="' + json['shipping_method'][i]['quote'][j]['code'] + '">' + json['shipping_method'][i]['quote'][j]['text'] + '</label></td>';
                                                html += '</tr>';
                                            }
                                        } else {
                                            html += '<tr>';
                                            html += '  <td colspan="3"><div class="error">' + json['shipping_method'][i]['error'] + '</div></td>';
                                            html += '</tr>';
                                        }
                                    }

                                    html += '  </table>';
                                    html += '  <br />';
                                    html += '  <input type="hidden" name="next" value="shipping" />';

                                    html += '  <input type="submit" value="Áp dụng vận chuyển" id="button-shipping" class="button btn btn-theme-default" disabled="disabled" />';

                                    html += '</form>';

                                    $.colorbox({
                                        overlayClose: true,
                                        opacity: 0.5,
                                        width: '600px',
                                        height: '400px',
                                        href: false,
                                        html: html
                                    });

                                    $('input[name=\'shipping_method\']').bind('change', function () {
                                        $('#button-shipping').attr('disabled', false);
                                    });
                                }
                            }
                        });
                    });
                    //
                </script> -->


<!--                <script type="text/javascript">
                    
                $('select[name=\'country_id\']').bind('change', function () {
                        $.ajax({
                            url: 'index.php?route=checkout/cart/country&country_id=' + this.value,
                            dataType: 'json',
                            beforeSend: function () {
                                $('select[name=\'country_id\']').after('<span class="wait">&nbsp;<img src="public/image/loading.gif" alt="" /></span>');
                            },
                            complete: function () {
                                $('.wait').remove();
                            },
                            success: function (json) {
                                if (json['postcode_required'] == '1') {
                                    $('#postcode-required').show();
                                } else {
                                    $('#postcode-required').hide();
                                }

                                html = '<option value=""> --- Chọn --- </option>';

                                if (json['zone'] != '') {
                                    for (i = 0; i < json['zone'].length; i++) {
                                        html += '<option value="' + json['zone'][i]['zone_id'] + '"';

                                        if (json['zone'][i]['zone_id'] == '') {
                                            html += ' selected="selected"';
                                        }

                                        html += '>' + json['zone'][i]['name'] + '</option>';
                                    }
                                } else {
                                    html += '<option value="0" selected="selected"> --- Không --- </option>';
                                }

                                $('select[name=\'zone_id\']').html(html);
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                            }
                        });
                    });

                    $('select[name=\'country_id\']').trigger('change');
                    //
                </script>-->
            </section>
        </div>
    </div>
</section>
<div class="modal fade" tabindex="-1" id="myModal" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Thông tin khách hàng</h4>
            </div>
            @include('admin.block.errors')
            <form method="post" action="{!!URL::route('phieuDatHang')!!}" class="form-horizontal" id="frm" enctype="multipart/form-data">
                <input name="_token" type="hidden" value="{!!csrf_token()!!}" />
                <div class="modal-body">
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input class="form-control" id="tenKH" name="txtTenKhachHang" value="{!!old('txtTenKhachHang')!!}" placeholder="Nhập tên khách hàng" />
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" id="diaChi" name="txtDiaChi" value="{!!old('txtDiaChi')!!}" placeholder="Nhập địa chỉ" />
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input class="form-control" id="txtSoDT" name="txtSoDT" value="{!!old('txtSoDT')!!}" placeholder="0912345678" />
                    </div>
                    <div class="form-group">
                        <label>Nơi nhận</label>
                        <input class="form-control" id="txtNoiNhan" name="txtNoiNhan" value="{!!old('txtNoiNhan')!!}" placeholder="Nhập nơi nhận hàng" />
                    </div>
                    <div class="form-group">
                        <label>Thời gian nhận </label>
                        <input type="date" style="height: 35px" class="form-control" id="thoiGianNhan"  name="txtThoiGianNhan" value="{!!old('txtThoiGianNhan')!!}" placeholder="Nhập tên loại sản phẩm. VD:sam sung" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" style="width: 200px;height: 30px">Đặt hàng</button> 
                </div>
            </form>
            <div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $(".alert").delay(3000).slideUp();
    });
</script>
@endsection


