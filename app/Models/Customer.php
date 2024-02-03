<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'group',
        'name',
        'opening_balance',
        'cr_dr',
        'registration_type',
        'ecommerce_operator',
        'trade_name',
        'mobile_no',
        'email',
        'shrinkage_percentage',
        'building_name',
        'building_no',
        'floor_no',
        'street',
        'post',
        'location_place',
        'country',
        'pincode',
    ];

    protected $casts = [
        'opening_balance' => 'decimal:2',
        'ecommerce_operator' => 'boolean',
        'shrinkage_percentage' => 'decimal:2',
    ];
}
