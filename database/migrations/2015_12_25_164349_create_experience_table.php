<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('experiences');
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('intitule');
            $table->text('description');
            $table->string('organisation');
            $table->string('ville');
            $table->date('date_dedut');
            $table->date('date_fin');
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
        Schema::drop('experiences');
    }
}
