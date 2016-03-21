<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CTHoaDon;
use App\SanPham;
use App\PhuKien;
use DB;
use Cart;

class WelcomeController extends Controller {

    public function index() {
        $sanPham  = CTHoaDon::select(DB::raw('sum(soluong) AS total'), 'masp')->groupBy('masp')->orderBy('total', 'desc')->get()->toArray();
        $arr_masp = array();
        foreach ($sanPham as $value) {
            $arr_masp[] = $value['masp'];
        }
        $sanPhamBanChay = SanPham::whereIn('id', $arr_masp)->skip(0)->take(6)->get()->toArray();
        $sanPhamMoi     = SanPham::select()->skip(0)->take(6)->orderBy('id', 'desc')->get()->toArray();
        $phuKien        = PhuKien::select()->skip(0)->take(3)->orderBy('id', 'desc')->get()->toArray();
        return view('user.pages.index', compact('sanPhamMoi', 'sanPhamBanChay', 'phuKien'));
    }

    public function hoTroMuaHang() {
        return view('user.pages.hotro');
    }

    public function supportSales(Request $request) {
        $hang     = $request->hang;
        $gia      = $request->rdioGia;
        $fillter  = array('hang' => $hang, 'Prices' => $gia);
        $products = SanPham::search($fillter);
        return view('user.pages.goiy', compact('products'));
    }

    public function thanhToan() {
        
    }

    public function tienHanhThanhToan(Request $request) {
        if (Cart::count() === 0) {
            echo '<script> alert("Đặt hàng không thành công! Bạn chưa chọn sản phẩm")</script>';
            header("refresh:1;url=http://localhost:81/dacn/home");
        } else {
            $now               = date('Y-m-d', time());
            $hoaDon            = new \App\DatHang();
            $hoaDon->ngaylap   = $now;
            $hoaDon->manv      = 5;
            $hoaDon->ten_kh    = $request->txtTenKhachHang;
            $hoaDon->diachi    = $request->txtDiaChi;
            $hoaDon->sdt       = $request->txtSoDT;
            $hoaDon->noinhan   = $request->txtNoiNhan;
            $hoaDon->tgnhan    = $request->txtThoiGianNhan;
            $hoaDon->trangthai = "Thanh toan qua ngan luong";
            $hoaDon->save();
            $maHD              = \App\DatHang::max('id');
            $content           = Cart::content();
            foreach ($content as $item) {
                $ctHoaDon          = new CTHoaDon();
                $ctHoaDon->mahd    = $maHD;
                $ctHoaDon->masp    = $item['id'];
                $ctHoaDon->soluong = $item['qty'];
                $ctHoaDon->dongia  = $item['price'];
                $ctHoaDon->tensp   = $item['name'];
                $ctHoaDon->save();
                $soLuong           = SanPham::find($item['id']);
                $soLuong->soluong  = $soLuong['soluong'] - $item['qty'];
                $soLuong->save();
            }

            $receiver = "tam94dk4@gmail.com";

            $return_url       = "http://localhost:81/dacn/thanh-toan";
            //Giá của cả giỏ hàng 
            $price            = Cart::total();
            //Mã giỏ hàng 
            $order_code       = $maHD;
            //Thông tin giao dịch
            $transaction_info = "Test Ban Hang";
            //Khai báo đối tượng của lớp NL_Checkout
            $nl               = new NL_Checkout();
            Cart::destroy();
            //Tạo link thanh toán đến nganluong.vn
            $url              = $nl->buildCheckoutUrl($return_url, $receiver, $transaction_info, $order_code, $price);
            return $url;
        }
    }

}
