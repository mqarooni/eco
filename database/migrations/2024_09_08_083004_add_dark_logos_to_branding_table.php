<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDarkLogosToBrandingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('branding', function (Blueprint $table) {
            $table->string('logo01_dark')->nullable()->after('logo01');
            $table->string('logo02_dark')->nullable()->after('logo02');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('branding', function (Blueprint $table) {
            $table->dropColumn('logo01_dark');
            $table->dropColumn('logo02_dark');
        });
    }
}
