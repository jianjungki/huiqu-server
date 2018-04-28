<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('order_money');
            $table->integer('pay_money');
            $table->integer('discount_money');
            $table->integer('bons_money');

            $table->lineString('close_reason');

            $table->integer('customer_id');
            $table->integer('order_type');
            $table->integer('payment_type');
            $table->string('remark');

            $table->string('contact_phone');
            $table->string('contact_address');

            $table->timestamp('contact_at')->default(DB::raw('NULL'));;
            $table->timestamp('close_time')->default(DB::raw('NULL'));;
            $table->timestamp('finish_time')->default(DB::raw('NULL'));;
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
        Schema::dropIfExists('order');
    }
}
