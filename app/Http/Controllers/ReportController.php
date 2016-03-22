<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CTHoaDon;
use DB;

class ReportController extends Controller {

    public function banChayTrongThang() {
        $now      = date('Y-m-d', time());
        $now_moth = date('Y-m-d', time() - 2629743);
//        where('created_at', '>=', $now_moth)->where('created_at', '<=', $now);
        $sanPham  = CTHoaDon::select(DB::raw('sum(soluong) AS total'), 'masp', 'tensp')->groupBy('masp')->orderBy('total', 'desc')->get()->toArray();
        return view('admin.thongke.banchaytrongthang', compact('sanPham'));
    }

    public function tonKho() {
        $tonkho = \App\SanPham::select()->where('soluong', '>', 0)->get()->toArray();
        return view('admin.thongke.tonkho');
    }

    public function doanhThu() {
        $doanhThu = CTHoaDon::select(DB::raw('sum(soluong*dongia) AS total'), DB::raw('DATE(created_at) as date'))->groupBy(date)->get()->toArray();
        return view('admin.thongke.doanhthu');
    }

    public function tungHang() {
        $tungHang = DB::table('loaisp')
                        ->join('sanpham', 'sanpham.maloai', '=', 'loaisp.id')
                        ->join('ct_hoadon', 'ct_hoadon.masp', '=', 'sanpham.id')
                        ->select(DB::raw(sum('ct_hoadon.soluong as total')), 'loaisp.name')//whre  ngay nua la ok
                        ->groupBy('loaisp.name')
                        ->get()->toArray();
        return view('admin.thongke.tunghang');
    }

}
