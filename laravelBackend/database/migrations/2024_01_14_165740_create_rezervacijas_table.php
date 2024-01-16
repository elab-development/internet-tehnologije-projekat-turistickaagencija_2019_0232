<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rezervacijas', function (Blueprint $table) {
            $table->id();

            $table->date('datumRezervacijeOd');
            $table->date('datumRezervacijeDo');
            $table->integer('avans');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rezervacijas');
    }
};
