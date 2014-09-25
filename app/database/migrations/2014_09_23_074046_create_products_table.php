<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('products', function($table) {
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->string('description', 255)->nullable()->default(NULL);
            $table->decimal('price');
            $table->integer('quantity');
            $table->integer('manufacturer_id')->unsigned();
            $table->timestamps();


        });

        Schema::table('products', function($table) {
            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers')
                ->onUpdate('cascade')
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
		//
//        Schema::table('products', function($table) {
//            $table->dropForeing('products_manufacturer_id_foreign');
//        });

        Schema::drop('products');
	}

}
