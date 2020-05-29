<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'company_id', 'address1', 'address2', 'kota', 'kode_pos', 'no_telp', 'no_fax'
    ];

    public function vendor()
    {
        return $this->belongsTo('App\Vendor');
    }
}
