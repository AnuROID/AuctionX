<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=[
        'title',
        'image',
        'base_price',
        'user_id'
    ];

     public function bids(){
        return $this->hasMany(Bid::class);
    }
    public function user()
{
    return $this->belongsTo(User::class);
}
}
