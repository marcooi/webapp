<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GoodReceipt extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'purchase_id', 'purchase_detail_id', 'qty', 'surat_jalan_no', 'serial_no', 
        'created_by', 'updated_by', 'receive_at'
    ];


    protected $table = 'good_receipts';
    
   
}
