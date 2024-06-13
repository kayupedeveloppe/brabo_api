<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHourlyRegimeWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hourly_regime_weeks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('week_id')->nullable();
            $table->unsignedBigInteger('hourly_regime_id')->nullable();
            $table->date('break_start_at')->nullable();
            $table->date('break_end_at')->nullable();
            $table->date('work_start_at')->nullable();
            $table->date('work_end_at')->nullable();
            $table->timestamps();

            $table->foreign('week_id')->references('id')->on('weeks')->onDelete('cascade');
            $table->foreign('hourly_regime_id')->references('id')->on('hourly_regimes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hourly_regime_weeks');
    }
}
