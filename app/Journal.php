<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Journal extends Model
{
    use SoftDeletes;
    protected $fillable = [
      'type_id', 'company_id', 'date', 'po_invoice_no', 'total_debit', 'total_credit', 'created_by', 'updated_by'
    ];

    public function details()
    {       
        return $this->belongsToMany(ChartOfAccount::class, 'journal_details')
        ->wherePivot('deleted_at', null)
        ->withPivot(['debit', 'credit']);
    }

    public function company()
    {
      return $this->belongsTo(Company::class);
    }

    // public function type()
    // {
    //   return $this->belongsTo(JournalType::class);
    // }

    // public function poInvoice()
    // {
    //   return $this->belongsTo(Company::class);
    // }

}
