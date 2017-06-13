<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion', function (Blueprint $table) {
            $table->bigIncrements('promotion_id');
            $table->bigInteger('branch_id');
            $table->bigInteger('business_id');
            $table->bigInteger('pricebook_id');
            $table->string('name');
            $table->string('description');
            $table->integer('promotion_type');
            $table->timestamp('created_at');
            $table->timestamp('date_start');
            $table->timestamp('date_end');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('promotion');
    }
}
