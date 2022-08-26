<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $primaryKey = 'id';
    const UPDATED_AT = null;
    public $fillable = ['name', 'email', 'phone', 'subject', 'message'];

    public static function boot() { 
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "nguyentruchuynh2002@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
