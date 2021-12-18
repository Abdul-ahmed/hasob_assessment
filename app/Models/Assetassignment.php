<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assetassignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'asset_id',
        'assignment_date',
        'status',
        'is_due',
        'due_date',
        'assigned_user_id',
        'assigned_by'
    ];
}
