<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->nullable();
            $table->string('cover')->nullable();
            $table->string('image')->nullable();
            $table->string('email')->nullable();
            $table->string('social')->nullable();
            $table->string('phone')->nullable();
            $table->string('name_en')->nullable();
            $table->string('position_en')->nullable();
            $table->string('title_en')->nullable();
            $table->string('experience_en')->nullable();
            $table->string('personal_information_en')->nullable();
            $table->string('skills_en')->nullable();
            $table->string('rating_en')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('position_ar')->nullable();
            $table->string('title_ar')->nullable();
            $table->string('experience_ar')->nullable();
            $table->string('personal_information_ar')->nullable();
            $table->string('skills_ar')->nullable();
            $table->string('rating_ar')->nullable();
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
        Schema::dropIfExists('team');
    }
}
