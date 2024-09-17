<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevelopmentgoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developmentgoals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->mediumText('title_en')->nullable();
            $table->longText('description_en')->nullable();
            $table->mediumText('title_ar')->nullable();
            $table->longText('description_ar')->nullable();
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
        Schema::dropIfExists('developmentgoals');
    }
}
