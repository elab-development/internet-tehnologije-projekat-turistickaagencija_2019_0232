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
            $table->renameColumn('datumRezervacijeOd', 'datumOd');
            $table->renameColumn('datumRezervacijeDo', 'datumDo');
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
            $table->renameColumn('datumOd', 'datumRezervacijeOd');
            $table->renameColumn('datumDo', 'datumRezervacijeDo');
        });
    }
};