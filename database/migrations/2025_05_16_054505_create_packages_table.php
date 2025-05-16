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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('delivery_id')->nullable()
                ->constrained('deliveries')->onDelete('cascade');

            $table->longText('package_description')->nullable(); // Nullable if optional
            $table->decimal('length', 8, 2)->default(0); // Default to 0
            $table->decimal('height', 8, 2)->default(0); // Default to 0
            $table->decimal('width', 8, 2)->default(0); // Default to 0
            $table->decimal('weight', 8, 2)->default(0); // Default to 0

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
