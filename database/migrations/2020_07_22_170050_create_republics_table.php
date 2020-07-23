<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepublicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('republics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('name');
            $table->string('CEP');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->boolean('kitchen');
            $table->boolean('living_room');
            $table->boolean('laundry');
            $table->boolean('furniture');
            $table->boolean('bedrooms_with_the_same_size');
            $table->longText('description')->nullable();
            $table->timestamps();
        });
        Schema::table('republics', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('republics');
    }
}
