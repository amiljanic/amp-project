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
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('shipping_info_id');
            $table->boolean('delivered')->default(false);
            $table->boolean('canceled')->default(false);
            $table->timestamps();

            $table->foreign('customer_id')
                ->on('customers')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('seller_id')
                ->on('sellers')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('shipping_info_id')
                ->on('shipping_infos')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('restrict');
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
