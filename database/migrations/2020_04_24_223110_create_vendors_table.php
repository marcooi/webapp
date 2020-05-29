<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 6);
            $table->string('description');
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();    
            $table->string('kota')->nullable();    
            $table->string('kode_pos')->nullable();    
            $table->string('no_telp')->nullable();                
            $table->string('no_fax')->nullable();                
            $table->string('contact')->nullable();                
            $table->string('email')->nullable();                
            $table->string('npwp')->nullable();      
            $table->string('negara')->nullable();      
            $table->boolean('is_vendor')->nullable();           
            $table->boolean('is_customer')->nullable();           
            $table->boolean('is_active')->nullable();     
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
        Schema::dropIfExists('vendors');
    }
}
