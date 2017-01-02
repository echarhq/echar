<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateLeavesTableChangeStartColumnToDateTimeType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leaves', function (Blueprint $table) {
            $table->dropColumn('start');
            $table->dropColumn('end');
        });

        Schema::table('leaves', function (Blueprint $table) {
            $table->dateTime('start');
            $table->dateTime('end')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leaves', function (Blueprint $table) {
            $table->dropColumn('start');
            $table->dropColumn('end');
        });

        Schema::table('leaves', function (Blueprint $table) {
            $table->timestamp('start');
            $table->timestamp('end')->nullable();
        });
    }
}
