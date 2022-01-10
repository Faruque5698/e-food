<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name',255);
            $table->text('short_description');
            $table->float('price',10,2);
            $table->float('tax',10,2);
            $table->tinyInteger("tax_type");
            $table->float('discount',10,2);
            $table->tinyInteger('discount_type');
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('attribute_id');
            $table->text('attribute_value');
            $table->integer('addon_id');
            $table->time('starting_time');
            $table->time('ending_time');
            $table->text('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
