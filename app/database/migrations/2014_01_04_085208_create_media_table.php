<?php

use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration {
	/**
	 * Run the migrations.
	 * @return void
	 */
	public function up()
	{
        Schema::create('categories', function($table){
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->string('name', 140);
            $table->string('description', 240)->nullable();
            $table->integer('type')->unsigned()->default('0');// is video or image default image=0
            $table->timestamps();
        });

        Schema::create('video_sites', function($table){
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->string('name', 140);
            $table->string('description', 240)->nullable();
            $table->string('link');
            $table->timestamps();
        });


        Schema::create('media', function($table){
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->string('name', 140);
            $table->string('slug')->unique();
            $table->string('description', 240)->nullable();
            $table->string('src');
            $table->string('thumbnail_src')->nullable();
            $table->integer('type')->unsigned()->default('0');// 1img 2 videos 3gif
            $table->integer('video_site_id')->unsigned()->default('0');//0 Not Video 1youtube 2 vimeo 3 vine 4..vsvs
            $table->timestamps();

            $table->integer('user_id')->unsigned();
            $table->integer('cat_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cat_id')->references('id')->on('categories');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{


        Schema::drop('video_sites');
        Schema::drop('media');
        Schema::drop('categories');

	}

}