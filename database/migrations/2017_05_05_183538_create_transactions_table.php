<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('order_detail_id')->unsigned();
            $table->integer('voucher_id')->unsigned()->nullable();
            $table->float('total_price', 8, 2);
            

            // $table->timestamps();
            

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
            $table->foreign('order_detail_id')
                  ->references('id')
                  ->on('order_details');
            $table->foreign('voucher_id')
                  ->references('id')
                  ->on('vouchers');
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
