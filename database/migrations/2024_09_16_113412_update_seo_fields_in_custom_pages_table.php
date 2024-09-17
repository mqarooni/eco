<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSeoFieldsInCustomPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('custompage', function (Blueprint $table) {
            // Drop the old SEO columns
            $table->dropColumn(['seo_title', 'seo_keywords', 'seo_description', 'seo_author', 'seo_language', 'seo_robots']);
            
            // Add new English SEO fields
            $table->string('seo_title_en')->nullable();
            $table->text('seo_keywords_en')->nullable();
            $table->text('seo_description_en')->nullable();
            $table->string('seo_author_en')->nullable();

            // Add new Arabic SEO fields
            $table->string('seo_title_ar')->nullable();
            $table->text('seo_keywords_ar')->nullable();
            $table->text('seo_description_ar')->nullable();
            $table->string('seo_author_ar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('custompage', function (Blueprint $table) {
            // Re-add the old SEO columns
            $table->string('seo_title')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->text('seo_description')->nullable();
            $table->string('seo_author')->nullable();
            $table->string('seo_language')->nullable();
            $table->string('seo_robots')->default('index, follow');

            // Drop the new English and Arabic SEO columns
            $table->dropColumn([
                'seo_title_en', 'seo_keywords_en', 'seo_description_en', 'seo_author_en',
                'seo_title_ar', 'seo_keywords_ar', 'seo_description_ar', 'seo_author_ar',
            ]);
        });
    }
}
