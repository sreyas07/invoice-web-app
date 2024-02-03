<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'code',
        'name',
        'hsn_sancode',
        'rc_applicable',
        'track_inventory',
        'sl_no',
        'quantity',
        'p_rate',
        's_rate',
        'value',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'rc_applicable' => 'boolean',
        'track_inventory' => 'boolean',
        'quantity' => 'integer',
        'p_rate' => 'decimal:2',
        's_rate' => 'decimal:2',
        'value' => 'decimal:2',
    ];
}
