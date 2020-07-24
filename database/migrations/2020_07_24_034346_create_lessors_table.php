<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cellphone');
            $table->string('birthday');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('confirm_password');
            $table->unsignedBigInteger('republic_id')->nullable();
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
        Schema::dropIfExists('lessors');
    }
}
