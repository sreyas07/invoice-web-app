<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'inv_no',
        'invoice_date',
        'customer_id',
        'section_number',
        'section_percentage',
        'rate',
        'qty',
        'tax_val',
        'cgst',
        'sgst',
        'total',
        'cess',
        'kfc',
        'round_off',
        'discount',
        'total_invoice_value',
    ];

    protected $casts = [
        'invoice_date' => 'date',
        'section_percentage' => 'decimal:2',
        'rate' => 'decimal:2',
        'tax_val' => 'decimal:2',
        'cgst' => 'decimal:2',
        'sgst' => 'decimal:2',
        'total' => 'decimal:2',
        'cess' => 'decimal:2',
        'kfc' => 'decimal:2',
        'round_off' => 'decimal:2',
        'discount' => 'decimal:2',
        'total_invoice_value' => 'decimal:2',
    ];
}
