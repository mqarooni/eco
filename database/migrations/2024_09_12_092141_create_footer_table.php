<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFooterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('custom_title_en')->nullable();
            $table->string('custom_title_ar')->nullable();
            $table->text('custom_content_en')->nullable();
            $table->text('custom_content_ar')->nullable();
            $table->json('useful_links')->nullable();
            $table->json('social_channels')->nullable();
            $table->json('general_logos')->nullable();
            $table->string('copyrights_en')->nullable();
            $table->string('copyrights_ar')->nullable();
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
        Schema::dropIfExists('footer');
    }
}
