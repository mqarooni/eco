<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class ClearSocialColumnInTeamTable extends Migration
{
    public function up()
    {
        // Set all existing social values to NULL
        DB::table('team')->update(['social' => null]);
    }

    public function down()
    {
        // This down method is optional since we are only clearing data
    }
}

