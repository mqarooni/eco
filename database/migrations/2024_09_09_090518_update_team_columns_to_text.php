<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('team', function (Blueprint $table) {
            // Update the columns to LONGTEXT to handle CKEditor content
            $table->longText('personal_information_en')->change();
            $table->longText('skills_en')->change();
            $table->longText('personal_information_ar')->change();
            $table->longText('skills_ar')->change();
        });
    }

};
