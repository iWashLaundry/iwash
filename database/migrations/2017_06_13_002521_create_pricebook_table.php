<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricebookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricebook', function (Blueprint $table) {
            $table->bigIncrements('pricebook_id');
            $table->bigInteger('base_pricebook_id');
            $table->bigInteger('branch_id');
            $table->bigInteger('business_id');
            $table->string('name');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pricebook');
    }
}
