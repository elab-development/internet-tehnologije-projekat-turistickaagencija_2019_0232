<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rezervacijas', function (Blueprint $table) {
            $table->string('smestaj');
            $table->string('status'); //potvrdjeno, na cekanju, otkazano
            $table->integer('brojOsoba');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rezervacijas', function (Blueprint $table) {
            $table->dropColumn('smestaj');
            $table->dropColumn('status');
            $table->dropColumn('brojOsoba');
        });
    }
};