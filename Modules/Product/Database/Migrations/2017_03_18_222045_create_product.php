<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduct extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Basic product data
        Schema::create('product__products', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string("name");

            // European Article Number
            $table->string("EAN");
            $table->timestamps();
        });


        // Localized product data
        Schema::create('product__products_translations', function(Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('title');
            $table->string('slug');
            $table->text('description');

            $table->boolean('status')->default(1);
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('og_title')->nullable();
            $table->string('og_description')->nullable();
            $table->string('og_image')->nullable();
            $table->string('og_type')->nullable();

            // foreign key
            $table->integer('product_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['product_id', 'locale']);
            $table->foreign('product_id')
                ->references('id')
                ->on('product__products')
                ->onDelete('cascade');

        });

        // Classification store - product properties
        // TODO:

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product__products_translations');
        Schema::drop('product__products');
    }

}
