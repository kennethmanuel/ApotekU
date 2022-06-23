<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_detail';

    protected $fillable = [
        'order_id',
        'medicine_id',
        'price',
        'quantity',
    ];

    public function medicine() 
    {
        return $this->belongsTo(Medicine::class, 'medicine_id', 'id');
    }
}
