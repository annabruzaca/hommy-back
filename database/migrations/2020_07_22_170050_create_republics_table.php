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
            $table->unsignedBigInteger('lessor_id')->nullable();
            $table->string('name');
            $table->string('CEP');
            $table->integer('how_many_bedrooms');
            $table->integer('how_many_bathrooms');
            $table->boolean('kitchen');
            $table->boolean('living_room');
            $table->boolean('laundry');
            $table->longText('description')->nullable();
            $table->timestamps();
        });
        Schema::table('republics', function (Blueprint $table) {
            $table->foreign('lessor_id')->references('id')->on('lessors')->onDelete('cascade');
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
