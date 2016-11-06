<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacePlacesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('place__places', function(Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('id');

			//
            $table->string("name", 255);

            //
            $table->string('email', 100);
            $table->string('phone', 40);
            $table->string('website', 255);
            $table->string('faxNumber', 100);
            $table->string('smsNumber', 100);

            //
			$table->string("zip", 10);
			$table->string('city', 100);
			$table->string('streetName', 100);
            $table->integer('streetNumber');
            $table->string('addressInfo', 120);

            $table->timestamps();
		});

        Schema::create('place__place_translations', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string("title",120);
            $table->string('slug', 255);
            $table->text('description');

            $table->boolean('status')->default(1);
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('og_title')->nullable();
            $table->string('og_description')->nullable();
            $table->string('og_image')->nullable();
            $table->string('og_type')->nullable();

            // foreign key
            $table->integer('place_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['place_id', 'locale']);
            $table->foreign('place_id')->references('id')->on('place__places')->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('place__place_translations');
		Schema::drop('place__places');
	}
}
