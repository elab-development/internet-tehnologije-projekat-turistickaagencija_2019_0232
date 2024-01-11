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
            $table->boolean('unapredPlaceno')->nullable();
            $table->date('datumRezervacijeOd')->nullable();
            $table->date('datumRezervacijeDo');
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
            $table->dropColumn('unapredPlaceno');
            $table->dropColumn('datumRezervacijeOd');
            $table->dropColumn('datumRezervacijeDo');
        });
    }
};
