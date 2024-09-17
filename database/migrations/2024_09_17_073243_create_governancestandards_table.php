<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGovernancestandardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('governancestandards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_en')->default('Governance standards name')->nullable();
            $table->string('name_ar')->default('الاسم الخاص بمعاير الحوكمة')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('governancestandards');
    }
}
