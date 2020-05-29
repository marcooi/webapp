<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('good_receipts', function (Blueprint $table) {
            $table->id();            
            $table->unsignedBigInteger('purchase_id');  
            $table->unsignedBigInteger('product_id');   
            $table->unsignedBigInteger('inventory_id');   
            $table->decimal('qty', 18, 2);
            $table->string('surat_jalan_no')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamp('receive_at', 0)->nullable();
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
        Schema::dropIfExists('goods_receipt');
    }
}
