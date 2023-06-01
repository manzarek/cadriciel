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
            $table->id();
            $table->string('nom', 100);
            $table->string('adresse', 100);
            $table->string('telephone', 20);
            $table->string('email', 100);
            $table->date('date_naissance');
            $table->integer('ville_id');

            $table->unique('email');
            $table->foreign('ville_id')->references('id')->on('ville');

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
        Schema::dropIfExists('etudiants');
    }
}
