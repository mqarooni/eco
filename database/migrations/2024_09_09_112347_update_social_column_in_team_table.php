<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSocialColumnInTeamTable extends Migration
{
    public function up()
    {
        Schema::table('team', function (Blueprint $table) {
            // Change 'social' column to JSON type to store multiple items
            $table->json('social')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('team', function (Blueprint $table) {
            // Revert the column back to text if necessary
            $table->text('social')->nullable()->change();
        });
    }
}

