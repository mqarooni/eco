<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGlobalImgToBrandingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('branding', function (Blueprint $table) {
            $table->string('global_img')->nullable()->after('favicon'); // Adds the column after 'favicon'
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
            $table->dropColumn('global_img');
        });
    }
}
