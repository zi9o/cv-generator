<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoisirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('loisirs');
        Schema::create('loisirs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
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
        Schema::drop('loisirs');
    }
}
