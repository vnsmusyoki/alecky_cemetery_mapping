<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('map_locations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('section_id')->nullable()->unsigned();
            $table->bigInteger('deceased_id')->nullable()->unsigned();
            $table->integer('location_id');
            $table->string('status')->default('available');
            $table->foreign('section_id')->references('id')->on('map_sections')->onDelete('set null');
            $table->foreign('deceased_id')->references('id')->on('deceaseds')->onDelete('set null');
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
        Schema::dropIfExists('map_locations');
    }
}
