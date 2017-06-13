<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->bigInteger('branch_id');
            $table->bigInteger('customer_id');
            $table->timestamp('date_ordered');
            $table->timestamp('date_to_claim');
            $table->timestamp('date_started');
            $table->timestamp('date_ready');
            $table->timestamp('date_claimed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order');
    }
}
