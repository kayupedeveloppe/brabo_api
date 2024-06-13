<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyAbsenceStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('absence_status', function (Blueprint $table) {
            $table->foreign('absence_id')->references('id')->on('absences')->onDelete('cascade');
            $table->foreign('absence_status_id')->references('id')->on('absence_statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('absence_status', function (Blueprint $table) {
            $table->dropForeign('absence_status_absence_id_foreign');
            $table->dropForeign('absence_status_absence_status_id_foreign');
        });
    }
}
