<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderdetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'orderdetail_ID',
        'order_ID', 
        'product_id',
        'quantity',
        'subtotal'        
    ];

    protected $table = 'orderdetail';
}