<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentingItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('renting_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cart_detail_id')->unsigned();
            

            // $table->timestamps();
            

            $table->foreign('cart_detail_id')
                  ->references('id')
                  ->on('order_details');
        });

        Schema::create('fine_rates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fine_rate')->default(50);

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
        Schema::dropIfExists('renting_items');
        Schema::dropIfExists('fine_rates');
        Schema::enableForeignKeyConstraints();
    }
}
