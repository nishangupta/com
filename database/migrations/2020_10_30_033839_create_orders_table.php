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
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('order_number');
            $table->text('products');
            $table->integer('shipping_cost')->nullable();
            $table->integer('tax')->nullable();
            $table->string('payment')->default('COD');
            $table->string('total_price');
            $table->enum('status',['PENDING','RTS','SHIPPED','CANCELLED'])->default('PENDING');
            $table->boolean('printed')->default(0);
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
