<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('pavadinimas');
            $table->integer('kodas');
            $table->integer('pvm_kodas');
            $table->bigInteger('telefonas');
            $table->string('elpastas');
            $table->string('adresas');
            $table->string('veikla');
            $table->string('vadovas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imones');
    }
}
