<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->datetime('date');
            $table->string('phone');
            $table->string('email');
            $table->string('facebook');
            $table->string('skype');
            $table->string('chartwork');
            $table->string('address');
            $table->longText('sumary');
            $table->string('images');
            $table->string('avatar');
            $table->string('developer');
            $table->string('professional_skill_des');
            $table->string('personal_skill_des');
            $table->string('work_experience_des');
            $table->string('education_des');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('cvs');
    }
}
