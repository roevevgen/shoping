<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->string('category');
            $table->string('category_code');
            $table->string('item_count');
            $table->string('title')->nullable();
            $table->string('titles')->nullable();
            $table->decimal('discount',8,2);
            $table->decimal('price',8,2);
            $table->text('description')->nullable();
            $table->string('name');
            $table->string('code');
            $table->string('size');
            $table->string('color');
            $table->double('prices')->default(0);
            $table->text('image')->nullable();
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
        Schema::dropIfExists('categories');
    }
}
