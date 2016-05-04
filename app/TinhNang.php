<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinhNang extends Model {

    protected $table = "tinhnang";
    protected $fillable = ['id', 'masp', 'manhinh', 'camera_sau', 'camera_truoc', 'hedieuhanh_CPU', 'bonho_luutru', 'ketnoi','thietke_trongluong','thongtin_pin','giaitri_ungdung'];
    public $timestamps = false;

}
