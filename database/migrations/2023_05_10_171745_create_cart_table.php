<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->integer('id')->comment('id_table');
            $table->integer('id_user')->comment('id_table');
            $table->integer('id_payment')->comment('id_table');
            $table->integer('id_cupon')->comment('id_table');
            $table->tinyInteger('state')->comment('0 = Inactive
1 = Active
2 = Deleted');
            $table->timestamp('created_at')->useCurrent()->comment('creation date');
            $table->timestamp('updated_at')->useCurrent()->comment('update date');
            $table->integer('total')->comment('total');
            $table->integer('valor_descontado')->comment('valor a descontar');
            $table->integer('tipo de pago')->comment('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
