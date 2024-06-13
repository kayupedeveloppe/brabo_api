<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTimesheetsToPresence extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('timesheets')) {
            Schema::table('timesheets', function (Blueprint $table) {
                $table->dropForeign(['timesheets_timesheet_category_id_foreign']);
                $table->dropColumn('timesheet_category_id');
            });

            Schema::rename('timesheets', 'presences');

            Schema::table('presences', function (Blueprint $table) {
                $table->unsignedBigInteger('presence_category_id')->after('id')->nullable();
                $table->foreign('presence_category_id')->references('id')->on('presence_categories');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('timesheets', function (Blueprint $table) {
            //
        });
    }
}
