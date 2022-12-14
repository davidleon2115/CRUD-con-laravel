<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'name',
        'last-name',
    ];
    public function Order(){
        return $this->hasOne(Order::class);
    }
}
