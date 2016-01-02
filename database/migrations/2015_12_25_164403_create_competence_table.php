<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('competences');
        Schema::create('competences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('intitule');
            $table->integer('niveau');
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
        Schema::drop('competences');
    }
}
