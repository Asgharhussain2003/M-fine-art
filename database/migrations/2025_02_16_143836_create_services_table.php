<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 8, 2); // e.g., 1999.99
            $table->string('duration')->default('N/A');
            $table->string('category'); // e.g., "Wall Art"
            $table->string('image')->nullable(); // Path to image
            $table->string('availability')->default('available'); // Available/Booked
            $table->string('location'); // City/Region
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
