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

        return view('admin.thongke.tonkho');
    }

    public function doanhThu() {

        return view('admin.thongke.doanhthu');
    }

    public function tungHang() {

        return view('admin.thongke.tunghang');
    }

}
