<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoucherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->float('discount_price', 8, 2);
            

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
        Schema::dropIfExists('vouchers');
    }
}
