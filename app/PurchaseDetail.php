<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PurchaseDetail extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'purchase_id', 'product_id', 'qty', 'unit_price', 'total_price'
    ];

  
}
