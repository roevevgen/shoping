<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parent_id')->unsigned()->default(1);
            $table->text('title')->nullable();
            $table->text('titles')->nullable();
            $table->decimal('discount',9,2);
            $table->decimal('prices',9,2);
            $table->text('description')->nullable();
            $table->string('name');
            $table->string('code');
            $table->string('size');
            $table->string('color');
            $table->double('price')->default(0);
            $table->text('image')->nullable();
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
        Schema::dropIfExists('lists');
    }
}
