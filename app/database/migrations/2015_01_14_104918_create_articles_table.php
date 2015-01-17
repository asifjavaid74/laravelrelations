<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    
	public function up()
	{
             Schema::create('posters', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('email',255);
            
            $table->timestamps();
        });
             Schema::create('articles', function(Blueprint $table)
             {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('title', 255);
            $table->text('body');
           // $table->foreign('user_id')->references('id')->on('posters')->onDelete('cascade');
            $table->timestamps();
             });
             Schema::table('articles', function($table) {
              $table->foreign('user_id')->references('id')->on('posters')->onDelete('cascade');
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		  Schema::drop('articles');
	}

}
