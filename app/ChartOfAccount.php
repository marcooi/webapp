<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChartOfAccount extends Model
{   
    protected $fillable = [
        'coa_id', 'name', 'category_id' 
    ];
}
