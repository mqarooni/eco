<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePopupsandcookiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popupsandcookies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->string('cookie_duration')->nullable();
            $table->string('cookie_duration_unit')->nullable();
            $table->string('cookie_name')->nullable();
            $table->string('cookie_value')->nullable();
            $table->string('cookie_domain')->nullable();
            $table->string('cookie_path')->nullable();
            $table->boolean('cookie_secure')->nullable();
            $table->boolean('cookie_http_only')->nullable();
            $table->string('cookie_same_site')->nullable();
            $table->string('cookie_purpose')->nullable();
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
        Schema::dropIfExists('popupsandcookies');
    }
}
