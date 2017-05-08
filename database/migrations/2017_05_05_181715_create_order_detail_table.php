<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shopping_cart_id')->unsigned();
            $table->integer('rental_product_id')->unsigned();
            $table->integer('quantity');
            $table->float('price', 8, 2);
            $table->dateTime('return_date');
            $table->boolean('is_complete');
            $table->timestamps();


            $table->foreign('shopping_cart_id')
                  ->references('id')
                  ->on('shopping_carts');

            $table->foreign('rental_product_id')
                  ->references('id')
                  ->on('rental_products');
            


            // $table->timestamps();
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
        Schema::dropIfExists('order_details');
        Schema::enableForeignKeyConstraints();
    }
}
