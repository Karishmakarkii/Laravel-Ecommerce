<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_desc',
        'price',
    ];
    public function category(){
        //hasOne , hasMany , belongsTo, belongToMany
        return $this->belongsTo(Category::class);
    }
}
