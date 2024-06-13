<?php

use App\Models\Contribution;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForEmployeeColumnInContributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contributions', function (Blueprint $table) {
             $table->enum('category', [Contribution::IS_FOR_EMPLOYEE, Contribution::IS_FOR_EMPLOYER])
                ->after('rate')
                ->default(Contribution::IS_FOR_EMPLOYEE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contributions', function (Blueprint $table) {
            $table->dropColumn('category');
        });
    }
}
