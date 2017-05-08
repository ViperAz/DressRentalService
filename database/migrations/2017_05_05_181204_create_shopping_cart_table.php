<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateShoppingCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('shopping_carts', function (Blueprint $table) {

            $value = Carbon::now('Asia/Bangkok');
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->timestamp('expired_date')->default($value)->addHour();



            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
            

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
        Schema::dropIfExists('shopping_carts');
        Schema::enableForeignKeyConstraints();
    }
}
