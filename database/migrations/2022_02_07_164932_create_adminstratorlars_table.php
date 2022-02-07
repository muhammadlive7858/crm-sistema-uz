<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminstratorlarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminstratorlars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->string('phone');
            $table->integer('adminstratsiya_id1')->nullable();
            $table->integer('adminstratsiya_id2')->nullable();
            $table->integer('adminstratsiya_id3')->nullable();
            $table->integer('adminstratsiya_id4')->nullable();
            $table->integer('adminstratsiya_id5')->nullable();
            $table->integer('adminstratsiya_id6')->nullable();
            $table->integer('adminstratsiya_id7')->nullable();
            $table->integer('adminstratsiya_id8')->nullable();
            $table->integer('adminstratsiya_id9')->nullable();
            $table->integer('adminstratsiya_id10')->nullable();
            $table->string('desc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adminstratorlars');
    }
}
