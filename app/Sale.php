<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'company_id', 'sales_person_id', 'po_no', 'po_date', 'invoice_no', 'invoice_date', 'tt_invoice_no',
        'tt_invoice_date', 'delivery_no', 'delivery_date', 'sub_total', 'ppn', 'ppn_amount', 'pph_23', 'pph_23_amount',
        'discount', 'shipping_fee', 'grand_total', 'is_confirmed', 'created_by', 'updated_by', 'printed_at'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'sale_details')
            ->wherePivot('deleted_at', null)
            ->withPivot(['qty', 'unit_price']);
    }
}
