<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'name',
        'fecha',
        'subtotal',
        'total',
    ];
    public function User(){
        return $this->hasOne(User::class);
    }
    public function items(){
        return $this->belongsToMany(Items::class);
    }
}
