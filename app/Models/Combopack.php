<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combopack extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_name',
        'start_date',
        'end_date',
        'status',
        'price',
        'tax',
        'image'
    ];
}
