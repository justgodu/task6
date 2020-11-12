<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'category_id'
    ];

    public function products(){
        return $this->belongsToMany('App\Models\Products', null,'category_id','product_id');
    }


}
