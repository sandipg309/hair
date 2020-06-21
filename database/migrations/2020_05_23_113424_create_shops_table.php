<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('shopId');
             $table->string('shopName')->nullable();
             $table->longtext('shopDescription')->nullable();
             $table->string('contactNumber')->nullable();
             $table->string('image')->nullable();
             $table->string('ownerName')->nullable();
             $table->string('shopAddress')->nullable();
             $table->string('longitude')->nullable();
             $table->string('latitude')->nullable();
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
        Schema::dropIfExists('shops');
    }
}
