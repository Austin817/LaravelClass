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
            $table->bigInteger('user_id');
            $table->string('order_no');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('county');
            $table->string('district');
            $table->string('zipcode');
            $table->string('address');
            $table->bigInteger('price');
            $table->string('pay_type');
            $table->bigInteger('is_paid')->default(0);
            $table->string('shipping');
            $table->bigInteger('shipping_fee');
            $table->bigInteger('shipping_status_id');
            $table->bigInteger('order_status_id');
            $table->longText('remark')->nullable();
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
