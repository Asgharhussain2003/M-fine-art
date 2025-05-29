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
    Schema::create('paint_services', function (Blueprint $table) {
        $table->id();
        $table->string('category_name');
        $table->string('color_name');
        $table->string('place');
        $table->date('service_date');
        $table->time('service_time');
        $table->decimal('amount', 8, 2);
        $table->decimal('advance', 8, 2)->default(0);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paint_services');
    }
};
