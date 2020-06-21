<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('journal_id');
            $table->string('chart_of_account_id');
            $table->string('description');
            $table->decimal('debit', 18, 2)->default(0); 
            $table->decimal('credit', 18, 2)->default(0); 
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
        Schema::dropIfExists('journal_details');
    }
}
