<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->integer('cate_id');
            $table->string('barcode');
            $table->float('amount');
            $table->integer('quantity');
            $table->boolean('hot');
            $table->text('images');
            $table->string('video');
            $table->longText('description');
            $table->text('short_description');
            $table->longText('info');
            $table->text('certification');
            $table->text('pack_delivery');
            $table->text('supply_ability');
            $table->text('export_history');
            $table->integer('shop_id');
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
