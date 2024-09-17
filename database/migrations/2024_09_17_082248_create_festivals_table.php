<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFestivalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('festivals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ar')->nullable();
            $table->text('overview_en')->nullable();
            $table->text('overview_ar')->nullable();
            $table->json('requirments_en')->nullable();
            $table->json('requirments_ar')->nullable();
            $table->string('time_en')->nullable();
            $table->string('time_ar')->nullable();
            $table->string('date_en')->nullable();
            $table->string('date_ar')->nullable();
            $table->string('phone_en')->nullable();
            $table->string('phone_ar')->nullable();
            $table->string('catagory_en')->nullable();
            $table->string('catagory_ar')->nullable();
            $table->string('location_en')->nullable();
            $table->string('location_ar')->nullable();
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
        Schema::dropIfExists('festivals');
    }
}
