<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable = [
        'cliant_name',
        'products',
        'payment_method',
        'confidence',
        'sales_amount',
        'cost_amount',
        'estimated_month',
    ];
}
