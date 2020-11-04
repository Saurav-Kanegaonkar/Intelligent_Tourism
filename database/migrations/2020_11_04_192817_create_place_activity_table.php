<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaceActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_activity', function (Blueprint $table) {
            $table->unsignedInteger('place_id');
            // $table->foreign('place_id')->references('id')->on('place')->onDelete('cascade');

            $table->unsignedInteger('activity_id');
            // $table->foreign('activity_id')->references('id')->on('activity')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('place_activity');
    }
}