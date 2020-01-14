<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->bigInteger('company_id');
            $table->bigInteger('status');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

            // $table->primary('id');
            // $table->foreign('company_id')->references('id')->on('company');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
