<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRatingColumnsInTeamTable extends Migration
{
    public function up()
    {
        Schema::table('team', function (Blueprint $table) {
            $table->json('rating_ar')->nullable()->change();
            $table->json('rating_en')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('team', function (Blueprint $table) {
            $table->string('rating_ar')->nullable()->change();
            $table->string('rating_en')->nullable()->change();
        });
    }
}
