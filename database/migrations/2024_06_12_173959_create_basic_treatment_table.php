<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicTreatmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_treatment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('remuneration_category_id')->nullable();
            $table->unsignedBigInteger('contribution_id')->nullable();
            $table->date('start_at')->nullable();
            $table->date('end_at')->nullable();
            $table->timestamps();

            $table->foreign('remuneration_category_id')->references('id')->on('remuneration_categories');
            $table->foreign('contribution_id')->references('id')->on('contributions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basic_treatment');
    }
}
