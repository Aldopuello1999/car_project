<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->integer('id', true)->comment('table id');
            $table->integer('code')->comment('code coupons');
            $table->integer('type')->comment('type coupons');
            $table->integer('value')->comment('value');
            $table->integer('percent_off')->comment('percent off');
            $table->timestamp('created_at')->useCurrent()->comment('creation date');
            $table->timestamp('updated_at')->useCurrent()->comment('update date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
