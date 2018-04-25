<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
              ->references('id')->on('users')
              ->onDelete('cascade');

           $table->string('location');
           $table->string('delivery_Location');
           $table->string('status');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
              ->references('id')->on('categories')
              ->onDelete('cascade');
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
        Schema::dropIfExists('items');
    }
}
