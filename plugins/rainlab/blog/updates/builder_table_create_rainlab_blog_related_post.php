<?php namespace RainLab\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRainlabBlogRelatedPost extends Migration
{
    public function up()
    {
        Schema::create('rainlab_blog_related_post', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('post_id')->unsigned();
            $table->integer('related_post_id')->unsigned();
            $table->primary(['post_id','related_post_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rainlab_blog_related_post');
    }
}
