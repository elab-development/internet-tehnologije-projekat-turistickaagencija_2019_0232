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
            $table->foreignId('destinacijaId')->first()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('putnikId')->first()->onUpdate('cascade')->onDelete('cascade');
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
            //
        });
    }
};
