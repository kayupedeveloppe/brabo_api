<?php

use App\Models\AbsencePlan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsencePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absence_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->enum('status', [AbsencePlan::INACTIVE, AbsencePlan::ACTIVE])->default(AbsencePlan::ACTIVE);
            $table->text('description')->nullable();
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
        Schema::dropIfExists('absence_plans');
    }
}
