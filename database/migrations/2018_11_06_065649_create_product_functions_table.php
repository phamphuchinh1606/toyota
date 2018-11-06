<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductFunctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_functions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->nullable(true);
            $table->integer('function_type_id');
            $table->string('function_name')->nullable(true);
            $table->string('function_content')->nullable(true);
            $table->integer('function_sort')->nullable(true);
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
        Schema::dropIfExists('product_functions');
    }
}
