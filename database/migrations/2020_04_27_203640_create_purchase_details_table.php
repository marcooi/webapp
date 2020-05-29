<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('purchase_id');   
            $table->foreign('purchase_id')->references('id')->on('purchases');   
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products'); 
            $table->decimal('qty', 18, 2);
            $table->decimal('unit_price', 18, 2);
            $table->decimal('total_price', 18, 2);
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
        Schema::dropIfExists('purchase_details');
    }
}
