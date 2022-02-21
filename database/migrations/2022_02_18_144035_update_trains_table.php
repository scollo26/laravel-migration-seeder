<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->date('date_start')->nullable()->after('hours_start');
            $table->time('hours_end')->after('date_start');
            $table->date('date_end')->nullable()->after('hours_end');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('date_start');
            $table->dropColumn('hours_end');
            $table->dropColumn('date_end');
            
        });
    }
}
