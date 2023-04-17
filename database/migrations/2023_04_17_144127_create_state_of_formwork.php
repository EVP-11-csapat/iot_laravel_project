<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('state_of_formwork', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('productionMachineID')->references('id')->on('production_machine');
            $table->integer('isOpen');
            $table->date('dateOfState');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('state_of_formwork');
    }
};