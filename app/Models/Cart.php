<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';
    protected $fillable= [
        'user_id',
        'medicine_id',
        'quantity'
    ];

    public function medicine()
    {
        return $this->belongsTo(Medicine::class,'medicine_id','id');
    }
}
