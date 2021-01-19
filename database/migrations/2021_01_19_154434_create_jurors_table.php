<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurors', function (Blueprint $table) {
            $table->ID();
            $table->string('LAST_NAME');
            $table->string('FIRST_NAME');
            $table->string('MIDDLE_NAME')->nullable();
            $table->string('SUFFIX')->nullable();
            $table->string('ADDRESS_1');
            $table->string('ADDRESS_2')->nullable();
            $table->string('CITY');
            $table->string('STATE');
            $table->string('ZIP_CODE');
            $table->string('SUM_DATE');
            $table->string('SUM_TYPE');
            $table->string('JUDGE_NAME');
            $table->string('DOB');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurors');
    }
}
