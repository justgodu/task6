<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneNums extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tel_number'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
