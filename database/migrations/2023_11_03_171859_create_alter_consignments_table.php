<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlterConsignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consignments', function (Blueprint $table) {
               
            $table->float('shipping_fee', 12, 2)->nullable();
            $table->decimal('tax')->nullable();

            $table->string('order_number')->nullable();
            $table->string('tracking_id')->nullable();
        });
        Schema::table('cars', function (Blueprint $table) {
               
            $table->string('qty')->nullable();
            $table->string('cost')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alter_consignments');
    }
}
