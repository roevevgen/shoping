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
            $table->bigIncrements('id');
            $table->text('tilt')->nullable();
            $table->text('title')->nullable();
            $table->decimal('discounts',9,2);
            $table->decimal('precess',9,2);
            $table->text('description')->nullable();
            $table->string('name');
            $table->string('code');
            $table->string('size');
            $table->string('color');
            $table->double('price')->default(0);
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
        Schema::dropIfExists('products');
    }
}
