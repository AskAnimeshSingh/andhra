<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branches extends Model
{
    use HasFactory;

    /**
     * @var massassignment
     */
    protected $fillable = [
        'name',
        'phone',
        'address',
        'delivery_fee',
        'dollor'
    ];
}
