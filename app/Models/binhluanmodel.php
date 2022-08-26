<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class binhluanmodel extends Model
{
    use HasFactory;

    protected $table = 'binhluan';
    protected $primaryKey = 'id_bl';
    protected $fillable = [
        'noi_dung',
        'id_kh',
        'id_sp'
    ];
}
