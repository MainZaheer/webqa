<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_settings', function (Blueprint $table) {
            $table->id();
            $table->integer("project_id");
            $table->boolean("meta_title")->default(0);
            $table->boolean("meta_desc")->default(0);
            $table->boolean("robots_meta")->default(0);
            $table->boolean("canonical_url")->default(0);
            $table->boolean("url_slug")->default(0);
            $table->boolean("open_graph_title")->default(0);
            $table->boolean("open_graph_desc")->default(0);
            $table->boolean("open_graph_image")->default(0);
            $table->boolean("open_graph_url")->default(0);
            $table->boolean("twitter_title")->default(0);
            $table->boolean("twitter_image")->default(0);
            $table->boolean("twitter_image_alt")->default(0);
            $table->boolean("favicon")->default(0);
            $table->boolean("xml_sitemap")->default(0);
            $table->boolean("html_sitemap")->default(0);
            $table->boolean("images")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_settings');
    }
}
