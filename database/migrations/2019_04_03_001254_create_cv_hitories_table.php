<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvHitoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_hitories', function (Blueprint $table) {
            $table->unsignedBigInteger('cvs_id');
            $table->foreign('cvs_id')->references('id')->on('cvs')->onDelete('cascade');
            $table->unsignedBigInteger('hitories_id');
            $table->foreign('hitories_id')->references('id')->on('hitories')->onDelete('cascade');
            $table->dateTime('year_start');
            $table->dateTime('year_end');
            $table->string('developer');
            $table->longText('description');
            $table->primary(array('cvs_id','hitories_id'));
            $table->softDeletes();
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
        Schema::dropIfExists('cv_hitories');
    }
}
