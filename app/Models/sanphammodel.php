<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class sanphammodel extends Model
{
    use HasFactory;

    protected $table = 'sanpham';
    protected $primaryKey = 'id_sp';
    protected $fillable = [
        'ten_sp',
        'gia',
        'hinh',
        'mo_ta',
        'luot_xem',
        'id_dm'
    ];

    protected $attributes = [
        'luot_xem' => 0
    ];

}
