<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'serial_number',
        'description',
        'fixed_or_Movable',
        'picture_path',
        'purchase_date',
        'start_use_date',
        'purchase_price',
        'warranty_expiry_date',
        'degradation_in_years',
        'current_value_in_naira',
        'location'
    ];


}
