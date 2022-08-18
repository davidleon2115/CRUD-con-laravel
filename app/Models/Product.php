<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'marca',
        'nombre',
        'description',
        'price',
        'stock',
    ];
    public function Imagen(){
        return $this->hasOne(Imagen::class);
    }
    public function item(){
        return $this->belongsTo(Item::class);
    }
}

