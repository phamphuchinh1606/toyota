<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerRequestPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_request_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255)->nullable(true);
            $table->string('email',100)->nullable(true);
            $table->string('phone',20)->nullable(true);
            $table->string('address',255)->nullable(true);
            $table->integer('product_id')->nullable(true);
            $table->date('time_plan')->nullable(true);
            $table->double('amount_current')->nullable(true);
            $table->integer('payment_id')->nullable(true);
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
        Schema::dropIfExists('customer_request_prices');
    }
}
