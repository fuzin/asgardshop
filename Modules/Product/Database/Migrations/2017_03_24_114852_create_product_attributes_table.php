<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductAttributesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product__attributes', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('key');

            $table->enum('type', [
                'BOOL',    // boolean
                'INTEGER', // hole number
                'DOUBLE',  // real number
                'SELECT',  // preset of values
                'LSELECT', // preset of localized values
                'STRING',  // string
                'TSTRING', // translated string
            ]);

            $table->timestamps();
        });

        // Localized product attribut data
        Schema::create('product__attributes_translations', function(Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('name');
            $table->string('slug');
            $table->text('description');

            // foreign key
            $table->integer('attribute_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['attribute_id', 'locale']);
            $table->foreign('attribute_id')
                ->references('id')
                ->on('product__attributes')
                ->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product__attributes_translations');
        Schema::drop('product__attributes');
    }

}
