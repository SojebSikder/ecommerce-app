<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            // $table->id();
            $table->string('id')->unique();
            $table->string('order_product_id');
            $table->string('user_id')->references('id')->on('users')->onDelete('set null');
            $table->decimal('price');
            $table->decimal('discount')->nullable();
            $table->enum('payment_mode', ['COD', 'BKASH'])->default('COD')->nullable();
            $table->enum('payment_status', ['not paid', 'paid'])->default('not paid')->nullable();

            $table->enum('status', [
                'order_placed',
                'order_picked',
                'order_on_way',
                'order_delivered',
                'order_cancelled',
                'order_paused'
            ])->nullable();
            $table->text('comment')->nullable();
            $table->text('address')->nullable();

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
        Schema::dropIfExists('orders');
    }
}
