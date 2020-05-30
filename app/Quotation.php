<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quotation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'company_id', 'sales_person_id', 'reff_no', 'contact_person', 'remark1', 'remark2', 'date', 'sub_total', 'ppn', 'ppn_amount', 'pph_23', 'pph_23_amount',
        'discount', 'shipping_fee', 'grand_total', 'is_confirmed', 'created_by', 'updated_by', 'printed_at'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'quotation_details')
            ->wherePivot('deleted_at', null)
            ->withPivot(['qty', 'unit_price']);
    }

}
