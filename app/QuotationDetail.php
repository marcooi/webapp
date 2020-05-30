<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuotationDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'quotation_id', 'product_id', 'qty', 'unit_price', 'total_price', 'pph_23', 'pph_23_amount'
    ];
}
