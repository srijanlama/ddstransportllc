<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccidentHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accident_history', function (Blueprint $table) {
            $table->id();
            $table->date('accident_date')->nullable();
            $table->longText('nature_of_accident')->nullable();
            $table->longText('fatalities')->nullable();
            $table->longText('injuries')->nullable();
            $table->unsignedBigInteger('driver_id')->nullable();
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
        Schema::dropIfExists('accident_history');
    }
}
