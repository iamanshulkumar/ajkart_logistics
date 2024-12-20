<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookDelivery extends Model
{
    protected $fillable = [
        'userid',
        'customername',
        'mobilebumber',
        'email',
        'product_data',
        'billingaddress',
        'shippingaddress',
        'subtotal',
        'totaldiscount',
        'grandtotal',
        'status',
    ];
}
