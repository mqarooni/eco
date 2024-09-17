<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutcommitteeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutcommittee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_en')->default('Vision')->nullable();
            $table->text('content_en')->default('...ضمان حقوق الأشخاص ذوي الإعاقة ودمجهم في المجتمع')->nullable();
            $table->string('title_ar')->default('الرؤية')->nullable();
            $table->text('content_ar')->default('Ensuring the rights of persons with disabilities and their...')->nullable();
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
        Schema::dropIfExists('aboutcommittee');
    }
}
