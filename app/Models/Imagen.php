<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imagen extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'url'
    ];

    public function Product(){
        return $this->hasOne(Product::class);
    }

}
