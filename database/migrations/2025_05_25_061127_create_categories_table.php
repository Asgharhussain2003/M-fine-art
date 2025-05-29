<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Category Name
            $table->date('date');
            $table->time('time');
            $table->string('location');
            $table->decimal('amount', 8, 2);
            $table->string('paint_type'); // Paint Collection
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('categories');
    }
};


