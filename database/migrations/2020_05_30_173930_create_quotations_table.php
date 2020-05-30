<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();

            $table->string('company_id');            
            $table->string('sales_person_id');
            $table->string('reff_no');
            $table->string('contact_person');
            $table->string('remark1');
            $table->string('remark2');           
            $table->timestamp('date', 0);

            $table->decimal('sub_total',18, 2);
            $table->decimal('ppn',18, 2);
            $table->decimal('ppn_amount',18, 2);
            $table->decimal('pph_23', 18, 2)->default(0); 
            $table->decimal('pph_23_amount', 18, 2)->default(0); 
            $table->decimal('discount',18, 2);        
            $table->decimal('shipping_fee',18, 2)->default(0);    
            $table->decimal('grand_total',18, 2);
            
            $table->string('is_confirmed')->default(0);            
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamp('printed_at', 0)->nullable();
            
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
        Schema::dropIfExists('quotations');
    }
}
