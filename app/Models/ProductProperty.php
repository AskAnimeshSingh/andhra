<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProperty extends Model
{
    use HasFactory;
    protected $table = 'product_properties';
    protected $fillable = [
        'product_id',
        'properties_id',
    ];
}
