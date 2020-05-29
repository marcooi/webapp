<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'address1', 'address2', 'kota', 'kode_pos', 'no_telp', 'no_fax',
         'contact', 'email', 'npwp', 'negara', 'is_vendor', 'is_customer', 'is_active'
    ];

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }
}
