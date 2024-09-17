<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->nullable();
            $table->string('cover')->nullable();
            $table->string('image')->nullable();
            $table->string('date_en')->nullable();
            $table->string('date_ar')->nullable();
            $table->text('title_en')->nullable();
            $table->text('title_ar')->nullable();
            $table->longText('description_en')->nullable();
            $table->longText('description_ar')->nullable();
            $table->mediumText('meeting_idea_title_en')->nullable();
            $table->mediumText('meeting_idea_title_ar')->nullable();
            $table->json('meeting_idea_en')->nullable();
            $table->json('meeting_idea_ar')->nullable();
            $table->string('category_en')->nullable();
            $table->string('category_ar')->nullable();
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
        Schema::dropIfExists('meetings');
    }
}
