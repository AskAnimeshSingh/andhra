<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebOrder extends Model
{
    use HasFactory;

    protected $table = 'web_orders';
    protected $primaryKey   = "id";
    public $timestamps      = false;

    protected $fillable = [
        'product_id',
        'branch_id',
        'table_no',
        'user_id',
        'qty',
        'price',
        'tax',
        'status',
        'payment_mode',
        'shipping_address',
        'pay_amount',
        'invoice_id',
        'txn_id',
        'coupon_code',
        'instruction',
        'delivery_type',
        'discount_value',
        'delivery_charge',
        'redeem_points_discount',
        'unique_session_id'
    ];
}
