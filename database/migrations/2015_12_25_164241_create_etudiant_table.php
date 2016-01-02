<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('etudiants');
        Schema::create('etudiants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cne', 20)->unique();
            $table->string('email', 100);
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->date('dateNaissance');
            $table->string('photo', 255);
            $table->string('telephone', 20);
            $table->string('situation', 20);
            $table->string('adresse', 255);
            $table->integer('filiere_id')->unsigned();
            $table->foreign('filiere_id')
                    ->references('id')->on('filieres')
                    ->onDelete('cascade');
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
        Schema::drop('etudiants');
    }
}
