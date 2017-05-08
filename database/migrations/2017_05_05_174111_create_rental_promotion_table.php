<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalPromotionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('promotions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rental_product_id')->unsigned();
            $table->integer('day')->unsigned();
            $table->float('price', 8, 2);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            // $table->timestamps();


            $table->foreign('rental_product_id')
                  ->references('id')
                  ->on('rental_products');
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
        Schema::dropIfExists('promotions');
        Schema::enableForeignKeyConstraints();
    }
}
