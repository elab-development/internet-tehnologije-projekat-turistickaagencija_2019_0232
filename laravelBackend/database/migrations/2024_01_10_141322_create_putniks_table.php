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
        Schema::create('putniks', function (Blueprint $table) {
            $table->id();

            // 'Ime' => $this->faker->name,
            // 'Prezime' => $this->faker->lastName,
            // 'Godine' => $this->faker->randomNumber(2),
            // 'Interesovanja' => $this->faker->words(3)

            $table->string('Ime');
            $table->string('Prezime');
            $table->integer('Godine');
            $table->string('Interesovanja');

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
        Schema::dropIfExists('putniks');
    }
};
