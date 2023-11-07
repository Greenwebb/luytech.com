<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consignments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('consignment_type')->nullable();
            $table->string('company_name')->nullable();
            $table->string('terms')->nullable();
            $table->bigInteger('num_of_vehicles')->nullable();
            $table->text('message')->nullable();
            $table->integer('status')->default(0);
            $table->integer('current_state')->default(1);
            $table->float('price', 12, 2)->default(0);
            $table->float('service_price', 12, 2)->default(0);
            $table->float('other_price', 12, 2)->default(0);

        
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
        Schema::dropIfExists('consignments');
    }
}
