<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('license', function (Blueprint $table) {
            $table->id();
            $table->string('license_no')->nullable();
            $table->string('state')->nullable();
            $table->string('type')->nullable();
            $table->date('expiry')->nullable();
            $table->boolean('license_denied_on_past')->nullable();
            $table->boolean('license_revoked_on_past')->nullable();
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
        Schema::dropIfExists('license');
    }
}
