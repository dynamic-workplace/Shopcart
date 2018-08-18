<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmartwearabletechDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartwearabletech_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('smartwearabletech_brand_id');
            $table->string('product_id');
            $table->string('battery');
            $table->string('specifications');
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
        Schema::dropIfExists('smartwearabletech_details');
    }
}
