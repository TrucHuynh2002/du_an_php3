<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class danhmucmodel extends Model
{
    use HasFactory;

    protected $table = 'danhmuc';
    protected $primaryKey = 'id_dm'; 
    public $timestamps = false;
    protected $fillable = [
        'ten_dm'
    ];
}
