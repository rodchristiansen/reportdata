<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReportdataWindowsFields extends Migration
{
    public function up()
    {
        Schema::table('reportdata', function (Blueprint $table) {
            $table->string('os_version_win')->nullable();
            $table->string('cpu_win')->nullable();
            $table->string('ram_win')->nullable();
            $table->text('disk_win')->nullable();
        });
    }

    public function down()
    {
        Schema::table('reportdata', function (Blueprint $table) {
            $table->dropColumn(['os_version_win', 'cpu_win', 'ram_win', 'disk_win']);
        });
    }
}
