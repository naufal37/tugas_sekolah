<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBonus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonus', function (Blueprint $table) {
            $table->integer('id_bonus')->unsigned()->primary('id_bonus');
            $table->string('bonus')->unique()->nullable();
            $table->timestamps();
            $table->foreign('id_bonus')->references('id')->on('produk')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bonus');
    }
}
