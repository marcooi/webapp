<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name', 'detail'
    ];

    public function purchases()
    {
        return $this->belongsToMany(Purchase::class);
    }

   
}
