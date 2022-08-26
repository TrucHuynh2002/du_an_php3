<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hoadonctmodel extends Model
{
    use HasFactory;

    protected $table = 'hoadonchitiet';
    protected $primaryKey = 'id_hdct';
    const UPDATED_AT = null;
}
