<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterMultipleTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->string('engine_cc')->nullable();
        });

        Schema::table('consignments', function (Blueprint $table) {
            $table->string('num_installments')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('product_type')->nullable();
            $table->string('service_type')->nullable();
            $table->string('installment_duration')->nullable();
            $table->string('clearing_from')->nullable();
            $table->string('delivery_town')->nullable();
            $table->string('num_goods')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
