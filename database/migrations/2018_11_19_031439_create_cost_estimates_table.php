<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostEstimatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_estimates', function (Blueprint $table) {
            $table->increments('id');
            $table->double('registration_of_owner_ship_fee')->nullable(true);
            $table->double('plate_number_fee')->nullable(true);
            $table->double('cost_for_using_road')->nullable(true);
            $table->double('civil_insurance_for_the_liability_fee')->nullable(true);
            $table->double('insurance_two_way')->nullable(true);
            $table->double('registrantion_fee_all')->nullable(true);
            $table->double('registrantion_fee_hcm')->nullable(true);
            $table->double('registrantion_fee_hn')->nullable(true);
            $table->double('registrantion_fee_dn')->nullable(true);
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
        Schema::dropIfExists('cost_estimates');
    }
}
