<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
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
            $table->datetime('transaction_datetime');
            $table->string('status');
            $table->integer('user_id')->unsigned();
            $table->integer('voucher_id')
                  ->unsigned()
                  ->nullable();
            $table->integer('promotion_id')
                  ->unsigned()
                  ->nullable();
            


            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
            $table->foreign('voucher_id')
                  ->references('id')
                  ->on('vouchers');
            $table->foreign('promotion_id')
                  ->references('id')
                  ->on('promotions');

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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('promotion_items');
        Schema::enableForeignKeyConstraints();
    }
}
