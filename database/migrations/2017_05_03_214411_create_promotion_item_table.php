<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('promotion_items', function (Blueprint $table) {

            $table->integer('promotion_id')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->float('discounted_price', 8, 2);
            $table->timestamps();

            $table->foreign('promotion_id')
                  ->references('id')
                  ->on('promotions');
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
        Schema::dropIfExists('promotion_items');
        Schema::enableForeignKeyConstraints();
    }
}
