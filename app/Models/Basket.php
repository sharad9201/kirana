<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;
    protected $fillable = ['quantity','price','user_id','product_id'];

    public function users(){
        return $this->belongsTo(User::class);
    }
    public function products(){
        return $this->hasMany(Products::class);
    }
}
