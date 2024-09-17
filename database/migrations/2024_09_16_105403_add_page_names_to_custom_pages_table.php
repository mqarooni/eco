<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('custompage', function (Blueprint $table) { // Use 'custompage' here
            $table->string('page_name_en')->nullable();
            $table->string('page_name_ar')->nullable();
    
            // Adding SEO fields
            $table->string('seo_title')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->text('seo_description')->nullable();
            $table->string('seo_author')->nullable();
            $table->string('seo_language')->nullable();
            $table->string('seo_robots')->default('index, follow');
        });
    }
    
    public function down()
    {
        Schema::table('custompage', function (Blueprint $table) { // Use 'custompage' here
            $table->dropColumn([
                'page_name_en', 'page_name_ar',
                'seo_title', 'seo_keywords', 'seo_description',
                'seo_author', 'seo_language', 'seo_robots'
            ]);
        });
    }
    
    
};
