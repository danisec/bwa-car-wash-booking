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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('make', 50);
            $table->string('model', 50);
            $table->year('year');
            $table->string('license_plate', 15)->unique();
            $table->string('color', 50);
            $table->enum('type', ['sedan', 'suv', 'truck', 'van', 'other']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_vehicles');
    }
};
