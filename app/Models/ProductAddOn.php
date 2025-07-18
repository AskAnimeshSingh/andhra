<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAddOn extends Model
{
    use HasFactory;

    /**
     * @var massassignment
     */
    protected $fillable = [
        'product_id',
        'variant'
    ];
}
