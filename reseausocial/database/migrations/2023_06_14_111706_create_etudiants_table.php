<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->string('adresse', 100);
            $table->string('telephone', 20);
            $table->date('date_naissance');
            $table->unsignedBigInteger('ville_id');
            //$table->unsignedBigInteger('user_id');

            $table->foreign('ville_id')->references('id')->on('villes');

            //$table->foreign('user_id')->references('id')->on('users');

            $table->foreignId('user_id')->constrained();

            $table->timestamps();

            $table->primary('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
