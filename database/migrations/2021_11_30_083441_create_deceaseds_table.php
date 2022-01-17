<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeceasedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deceaseds', function (Blueprint $table) {
            $table->id();
            $table->string('full_names');
            $table->decimal('latitude', 5, 2)->nullable()->default(123.45);
            $table->decimal('longitude', 5, 2)->nullable()->default(123.45);
            $table->string('next_kin_full_names');
            $table->string('next_kin_phone_number');
            $table->string('burial_date');
            $table->string('picture');
            $table->longText('eulogy');
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
        Schema::dropIfExists('deceaseds');
    }
}
