<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'company_id', 'po_no', 'date', 'payment_type', 'time_of_delivery',
        'remark1', 'remark1', 'sub_total', 'ppn', 'ppn_amount', 'discount', 'grand_total', 'created_by', 'updated_by'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'purchase_details')
            ->wherePivot('deleted_at', null)
            ->withPivot(['qty', 'unit_price']);
    }

   

   
    
}
