<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobileaccessoriesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobileaccessories_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mobileaccessories_type_id');
            $table->string('product_id');
            $table->string('brand_name');
            $table->string('for');
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
        Schema::dropIfExists('mobileaccessories_details');
    }
}
