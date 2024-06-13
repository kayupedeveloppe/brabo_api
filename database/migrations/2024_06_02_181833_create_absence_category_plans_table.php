<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenceCategoryPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absence_category_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('absence_category_id')->nullable();
            $table->unsignedBigInteger('absence_plan_id')->nullable();
            $table->timestamps();

            $table->foreign('absence_category_id')->references('id')->on('absence_categories')->onDelete('cascade');
            $table->foreign('absence_plan_id')->references('id')->on('absence_plans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absence_category_plans');
    }
}
