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
            /**
             * payment_mode:
             * 
             * cod = Cash on delivery
             * bkash = bkash
             */
            $table->string('payment_mode')->default('COD')->nullable();
            /**
             * payment_status:
             * 
             * not_paid = payment not paid
             * paid = payment paid
             */
            $table->string('payment_status')->default('not_paid')->nullable();

            /**
             * order status: 
             * 
             * order_placed = order placed
             * order_picked = order picked
             * order_on_way = order on way
             * order_delivered = order delivered
             * order_cancelled = order cancelled
             * order_paused = order paused
             */
            $table->string('status')->nullable();
            $table->text('comment')->nullable();
            $table->text('address')->nullable();
            $table->string('address_id')->nullable();

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
        Schema::dropIfExists('orders');
    }
}
