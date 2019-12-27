<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('clients_id')->unsigned(); 
            $table->foreign('clients_id')->references('id')->on('clients');
            $table->bigInteger('copys_id')->unsigned(); 
            $table->foreign('copys_id')->references('id')->on('copys');
            $table->date('date_loan');
            $table->date('date_return');
            $table->string('state');
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
        Schema::dropIfExists('loans');
    }
}
