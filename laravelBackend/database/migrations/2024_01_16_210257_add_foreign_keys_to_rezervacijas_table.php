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
        Schema::table('rezervacijas', function (Blueprint $table) {
            $table->foreignId('destinacija_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

        $table->foreignId('putnik_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rezervacijas', function (Blueprint $table) {
            $table->dropForeign(['destinacija_id']);
            $table->dropForeign(['putnik_id']);
            $table->dropColumn(['destinacija_id', 'putnik_id']);
        });
    }
};
