<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterNullableToEmploymentHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employment_history', function (Blueprint $table) {
            //
            $table->string('organization')->nullable()->change();
            $table->string('address')->nullable()->change();
            $table->string('city')->nullable()->change();
            $table->string('state')->nullable()->change();
            $table->string('zip')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->string('position')->nullable()->change();
            $table->date('start_on')->nullable()->change();
            $table->date('end_on')->nullable()->change();
            // $table->unsignedDouble('salary')->nullable()->change();
            $table->mediumText('reason_for_leaving')->nullable()->change();
            $table->unsignedBigInteger('driver_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employment_history', function (Blueprint $table) {
            //
            Schema::drop('employment_history');
        });
    }
}
