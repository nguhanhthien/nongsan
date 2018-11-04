<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->integer('product_id');
            $table->text('description');
            $table->text('promotion');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->dateTime('date_protocol')->comment('Ngày giao hàng');
            $table->integer('unit_min')->comment('Số ượng đặt hàng nhỏ nhất');
            $table->text('areas')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deals');
    }
}
