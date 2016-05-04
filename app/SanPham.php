<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model {

    protected $table = "sanpham";
    protected $fillable = ['id', 'name', 'sanxuat', 'baohanh', 'mau', 'gia', 'soluong', 'anh', 'trang_thai', 'mo_ta','soluong', 'maloai'];
    public $timestamps = false;

    public function images() {
        return $this->hasMany('App\AnhSP');
    }

    public static function search($fillter = array()) {
        $a = '';
        $b = '';
        if (!empty($fillter['Prices'])) {
            if ($fillter['Prices'] === '1') {
                $a = '0';
                $b = '3000000';
            } elseif ($fillter['Prices'] === '2') {
                $a = '3000000';
                $b = '5000000';
            } elseif ($fillter['Prices'] === '3') {
                $a = '5000000';
                $b = '8000000';
            } elseif ($fillter['Prices'] === '4') {
                $a = '8000000';
                $b = '20000000';
            }
        }
        $hang  = $fillter['hang'];
        $query = SanPham::where('gia', '>=', $a)->where('gia', '<=', $b)
                        ->where(function($q) use ( $hang ) {
                            foreach ($hang as $value) {
                                $q->orwhere('name', 'like', '%' . $value . '%');
                            }
                        })->get()->toArray();

        return $query;
    }

}
