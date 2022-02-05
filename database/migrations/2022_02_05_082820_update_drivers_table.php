<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drivers', function (Blueprint $table) {
            //
            $table->date('date_of_application')->nullable();
            $table->string('position')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->boolean('working_in_us')->nullable();
            $table->date('dob')->nullable();
            $table->unsignedInteger('age')->nullable();
            $table->string('reference_person')->nullable();
            $table->unsignedDouble('expected_salary')->nullable();
            $table->boolean('pre_drug_test')->nullable();
            $table->boolean('jail_term')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drivers', function (Blueprint $table) {
            //
            $table->dropColumn('date_of_application');
            $table->dropColumn('position');
            $table->dropColumn('first_name');
            $table->dropColumn('middle_name');
            $table->dropColumn('last_name');
            $table->dropColumn('working_in_us');
            $table->dropColumn('dob');
            $table->dropColumn('age');
            $table->dropColumn('reference_person');
            $table->dropColumn('expected_salary');
            $table->dropColumn('pre_drug_test');
            $table->dropColumn('jail_term');
            $table->dropColumn('state');
        });
    }
}
