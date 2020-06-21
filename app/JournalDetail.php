<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JournalDetail extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'journal_id', 'coa_id', 'description', 'debit', 'credit'
      ];
}
