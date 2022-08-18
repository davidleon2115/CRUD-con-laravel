<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'cantidad',
   
    ];

    public function order()
    {
        return $this->belongsTo(Order::class,'id');
    }
    public function products()
    {
        return $this->belongsTo(Product::class,'id');
    }
        
}
