<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');   
            $table->unsignedBigInteger('purchase_id');   
            $table->decimal('qty', 18, 2);           
            $table->unsignedBigInteger('appearing_id');
            $table->timestamp('appearing_at', 0);
            $table->unsignedBigInteger('disappearing_id')->nullable();
            $table->timestamp('disappearing_at', 0)->nullable();
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
        Schema::dropIfExists('inventories');
    }
}
