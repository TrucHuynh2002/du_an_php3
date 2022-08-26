<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hoadonmodel extends Model
{
    use HasFactory;

    protected $table = 'hoadon';
    protected $primaryKey = 'id_hd';
    const UPDATED_AT = null;
    
}
