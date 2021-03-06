<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'order_detail_id',
        'fname',
        'lname',
        'email',
        'phone',
        'address1',
        'address2',
        'city',
        'province',
        'status',
        'message',
        'tracking_no',
        'total_price',
    ];

    public function orderdetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
