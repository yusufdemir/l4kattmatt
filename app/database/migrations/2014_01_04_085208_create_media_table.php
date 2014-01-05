<?php

use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//

        Schema::create('categories', function($table){
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->string('name', 140);
            $table->string('description', 240)->nullable();
            $table->integer('type')->unsigned()->default('0');// is video or image default image=0
            $table->timestamps();
        });

        Schema::create('images', function($table){
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->string('name', 140);
            $table->string('description', 240)->nullable();
            $table->string('src');
            $table->timestamps();
            $table->integer('type')->unsigned()->default('0');// is gif to 1
            $table->integer('user_id')->unsigned();
            $table->integer('cat_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cat_id')->references('id')->on('categories');
        });

        Schema::create('video_sites', function($table){
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->string('name', 140);
            $table->string('description', 240)->nullable();
            $table->string('link');
            $table->timestamps();
        });

        Schema::create('videos', function($table){
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->string('name', 140);
            $table->string('description', 240)->nullable();
            $table->string('src');
            $table->string('thumbnail_src');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->integer('video_site_id')->unsigned();
            $table->integer('cat_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('video_site_id')->references('id')->on('video_sites');
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

        Schema::drop('categories');
        Schema::drop('images');
        //
        Schema::drop('video_sites');
        Schema::drop('videos');

	}

}