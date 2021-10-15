<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('offer_title');
            $table->string('offer_description');
            $table->string('offer_main_ingedient');
            $table->string('offer_cuisine');
            $table->string('offer_weight');
            $table->string('offer_type');
            $table->string('offer_day');
            $table->string('offer_time');
            $table->string('offer_preorder');
            $table->string('offer_quantity');
            $table->string('offer_delivery_option');
            $table->string('offer_streat');
            $table->string('offer_postcode');
            $table->string('offer_city');
            $table->string('offer_deliveryzone1_km')->nullable();
            $table->string('offer_deliveryzone1_price')->nullable();
            $table->string('offer_deliveryzone2_km')->nullable();
            $table->string('offer_deliveryzone2_price')->nullable();
            $table->string('offer_deliveryzone3_km')->nullable();
            $table->string('offer_deliveryzone3_price')->nullable();
            $table->string('offer_free_delivery')->nullable();
            $table->string('offer_price');
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
        Schema::dropIfExists('offers');
    }
}
