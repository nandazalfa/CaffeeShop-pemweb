<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name', 
        'customer_phone', 
        'payment_method', 
        'total_amount', 
        'status',
        'created_at',
        'updated_at',
    ];
}
