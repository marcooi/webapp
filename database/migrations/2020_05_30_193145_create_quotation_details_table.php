<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotation_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('quotation_id');   
            $table->foreign('quotation_id')->references('id')->on('quotations');   
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products'); 
            $table->decimal('qty', 18, 2);
            $table->decimal('unit_price', 18, 2);
            $table->decimal('total_price', 18, 2);

            $table->decimal('pph_23', 18, 2)->default(0); 
            $table->decimal('pph_23_amount', 18, 2)->default(0); 
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
        Schema::dropIfExists('quotation_details');
    }
}
