<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('serial_number');
            $table->string('description');
            $table->string('fixed_or_Movable');
            $table->string('picture_path');
            $table->string('purchase_date');
            $table->string('start_use_date');
            $table->string('purchase_price');
            $table->string('warranty_expiry_date');
            $table->string('degradation_in_years');
            $table->string('current_value_in_naira');
            $table->string('location');
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
        Schema::dropIfExists('assets');
    }
}
