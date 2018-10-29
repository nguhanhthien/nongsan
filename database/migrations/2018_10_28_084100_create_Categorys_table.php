<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Categorys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('slug')->nullable();
            $table->string('name')->nullable();
            $table->string('thumb')->nullable();
            $table->integer('parent_id');
            $table->text('description');
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
        Schema::dropIfExists('Categorys');
    }
}
