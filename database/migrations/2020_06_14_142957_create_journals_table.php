<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('type_id');
            $table->unsignedInteger('company_id');
            $table->timestamp('date', 0)->nullable();
            $table->string('po_invoice_no');           
            $table->decimal('total_debit', 18, 2)->default(0); 
            $table->decimal('total_credit', 18, 2)->default(0); 
            $table->string('created_by');
            $table->string('updated_by');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journals');
    }
}
