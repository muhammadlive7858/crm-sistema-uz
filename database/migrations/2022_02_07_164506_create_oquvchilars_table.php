<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOquvchilarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oquvchilars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->integer('kurs_id1')->nullable();
            $table->integer('kurs_id2')->nullable();
            $table->integer('kurs_id3')->nullable();
            $table->integer('kurs_id4')->nullable();
            $table->integer('kurs_id5')->nullable();
            $table->integer('phone1');
            $table->integer('phone2')->nullable();
            $table->string('addres')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oquvchilars');
    }
}
