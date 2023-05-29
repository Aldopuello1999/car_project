<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true)->comment('table id');
            $table->string('name')->comment('name to display for users');
            $table->string('lastname')->comment('last name of user');
            $table->integer('identification')->comment('identification');
            $table->string('username')->comment('username');
            $table->string('email')->unique()->comment('email of user');
            $table->string('password')->comment('password of user');
            $table->integer('profile')->comment('profile');
            $table->timestamp('created_at')->useCurrent()->comment('creation date');
            $table->timestamp('updated_at')->useCurrent()->comment('update date');
            $table->tinyInteger('state')->comment('0 = Inactive
1 = Active
2 = Deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
