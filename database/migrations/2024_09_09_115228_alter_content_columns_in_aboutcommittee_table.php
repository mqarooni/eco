<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterContentColumnsInAboutcommitteeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aboutcommittee', function (Blueprint $table) {
            // Change the column types to text
            $table->text('content_en')->nullable()->change();
            $table->text('content_ar')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aboutcommittee', function (Blueprint $table) {
            // Revert back to string type if necessary
            $table->string('content_en', 255)->nullable()->change();
            $table->string('content_ar', 255)->nullable()->change();
        });
    }
}
