<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('formations');
        Schema::create('formations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('intitule');
            $table->string('diplome');
            $table->date('date_dedut');
            $table->date('date_fin');
            $table->string('mention');
            $table->integer('etablissement_id')->unsigned();
            $table->foreign('etablissement_id')->references('id')->on('etablissements')->onDelete('cascade');;
            $table->integer('cv_id')->unsigned();
            $table->foreign('cv_id')->references('id')->on('cvs')->onDelete('cascade');;
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
        Schema::drop('formations');
    }
}
