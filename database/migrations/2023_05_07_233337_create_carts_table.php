<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_items', function (Blueprint $table) {
            $table->integer('id', true)->comment('table id');
            $table->integer('id_car')->comment('table id car');
            $table->integer('id_product')->comment('related product id');
            $table->integer('cantidad')->comment('cantidad en el carrito');
            $table->double('precio')->comment('precio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
