<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('company_id');
          
            $table->string('po_no');
            $table->timestamp('date', 0)->nullable();
            $table->timestamp('due_date', 0)->nullable();           
            $table->string('so_no');
            $table->string('payment_type');
            
            $table->string('time_of_delivery');
            $table->string('remark1')->nullable();
            $table->string('remark2')->nullable();

            $table->decimal('sub_total', 18, 2);
            $table->decimal('ppn', 18, 2);
            $table->decimal('ppn_amount', 18, 2);
            $table->decimal('discount', 18, 2);          
            $table->decimal('grand_total', 18, 2);

            $table->string('approved_by')->nullable();
            $table->timestamp('approved_at', 0)->nullable();
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
        Schema::dropIfExists('purchases');
    }
}
