<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id', true)->comment('table id');
            $table->integer('id_categories')->comment('id categories');
            $table->string('name')->comment('name to product');
            $table->string('description')->comment('general description of the product');
            $table->string('photo')->comment('photo to product');
            $table->timestamp('created_at')->useCurrent()->comment('creation date');
            $table->timestamp('updated_at')->useCurrent()->comment('update date');
            $table->integer('precio')->comment('valor del producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
