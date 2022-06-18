<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'generic_name', 
        'form',
        'restriction_formula',
        'price',
        'description',
        'faskes1',
        'faskes2',
        'faskes3',
        'category_id',
    ];
}
