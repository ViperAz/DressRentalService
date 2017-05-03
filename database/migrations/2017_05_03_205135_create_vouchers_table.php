<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVouchersTable extends Migration
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
            $table->string('code')->unique();
            $table->dateTime('start_datetime');
            $table->dateTime('end_datetime');
            $table->float('discounted_price', 8, 2);
            $table->timestamps();
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
