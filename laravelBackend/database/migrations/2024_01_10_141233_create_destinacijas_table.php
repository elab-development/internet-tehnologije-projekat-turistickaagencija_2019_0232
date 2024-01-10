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
        Schema::create('destinacijas', function (Blueprint $table) {
            $table->id();

            // 'Naziv'
            // 'GeoSirina' 
            // 'GeoDuzina'
            // 'Opis'
            // 'Klima'
            // 'Atrakcije'

            $table->string('Naziv');
            $table->float('GeoSirina');
            $table->float('GeoDuzina');
            $table->string('Opis');
            $table->string('Klima');
            $table->string('Atrakcije');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinacijas');
    }
};
