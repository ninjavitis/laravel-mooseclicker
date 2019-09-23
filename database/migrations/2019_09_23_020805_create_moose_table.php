<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMooseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moose', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->default('');
            $table->binary('image')->nullable();
            $table->integer('clicks')->default(0);
            $table->timestamp('last_click')->useCurrent();
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
        Schema::dropIfExists('moose');
    }
}
