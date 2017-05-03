<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('transaction_items', function (Blueprint $table) {

            $table->integer('transaction_id')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->float('final_price', 8, 2);
            


            $table->foreign('transaction_id')
                  ->references('id')
                  ->on('transactions');
            $table->foreign('item_id')
                  ->references('id')
                  ->on('items');

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
        Schema::dropIfExists('transaction_items');
        Schema::enableForeignKeyConstraints();
    }
}
