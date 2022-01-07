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
            // $table->id();
            $table->string('id')->unique();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('content')->nullable();
            $table->string('brand')->nullable();
            $table->unsignedBigInteger('category_id')->nullable()->references('id')->on('categories')->onDelete('set null');
            // Product Info
            $table->decimal('price')->nullable();
            $table->decimal('old_price')->nullable();
            $table->bigInteger('qnty')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('published')->default(1)->comment('1=published 2=draft');

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
