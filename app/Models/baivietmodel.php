<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class baivietmodel extends Model
{
    use HasFactory;

    protected $table = 'baiviet';
    protected $primaryKey = 'id_baiviet';
    protected $fillable = [
        'tieu_de',
        'mo_ta',
        'noi_dung',
        'hinh'
    ];
    
}
