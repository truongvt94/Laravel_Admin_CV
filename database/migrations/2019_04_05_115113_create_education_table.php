<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('university_id');
            $table->foreign('university_id')->references('id')->on('universities');
            $table->unsignedBigInteger('cv_id');
            $table->foreign('cv_id')->references('id')->on('cvs');
            $table->year('year_start');
            $table->year('year_end');
            $table->string('developer');
            $table->longText('description');
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
        Schema::dropIfExists('education');
    }
}
