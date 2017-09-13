<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsConversionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_conversion', function (Blueprint $table) {
            $table->bigIncrements('unit_conversion_id');
            $table->bigInteger('from_unit');
            $table->bigInteger('from_value');
            $table->bigInteger('to_unit');
            $table->bigInteger('to_value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('unit_conversion');
    }
}
