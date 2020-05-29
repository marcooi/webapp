<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'address1', 'address2', 'kota', 'kode_pos', 'no_telp', 'no_fax', 'email', 'npwp'
    ];



}
