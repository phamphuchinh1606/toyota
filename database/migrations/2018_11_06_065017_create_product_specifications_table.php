<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_specifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->nullable(false);
            $table->integer('specification_item_id')->nullable(false);
            $table->string('specification_item_name')->nullable(true);
            $table->integer('specification_type_id')->nullable(false);
            $table->string('specification_type_name')->nullable(true);
            $table->integer('specification_group_id')->nullable(false);
            $table->string('specification_group_name')->nullable(true);
            $table->string('specification_content')->nullable(true);
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
        Schema::dropIfExists('product_specifications');
    }
}
