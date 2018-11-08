<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSalientFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_salient_features', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->nullable(true);
            $table->string('feature_type',255)->nullable(true);
            $table->string('feature_title',255)->nullable(true);
            $table->string('feature_content',255)->nullable(true);
            $table->string('feature_image',255)->nullable(true);
            $table->string('feature_sort')->default(0)->nullable(true);
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
        Schema::dropIfExists('product_salient_features');
    }
}
