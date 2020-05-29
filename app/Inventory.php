<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'product_id', 'qty', 'appearing_id', 'appearing_at', 'disappearing_id', 
        'disappearing_at', 'created_by', 'updated_by'
    ];

    
}
