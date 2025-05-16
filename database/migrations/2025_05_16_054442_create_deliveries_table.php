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
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();

            $table->string('pickup_address')->nullable();
            $table->string('pickup_name')->nullable();
            $table->string('pickup_contact_no')->nullable();
            $table->string('pickup_email')->nullable();
            $table->string('delivery_address')->nullable();
            $table->string('delivery_name')->nullable();
            $table->string('delivery_contact_no')->nullable();
            $table->string('delivery_email')->nullable();
            $table->integer('type_of_good')->default(1); // Default to Document
            $table->integer('provider')->nullable(); // Add default if needed
            $table->integer('priority')->default(1); // Default to Standard
            $table->timestamp('pickup_time')->nullable(); // Use timestamp
            $table->timestamp('shipment_ready_time')->nullable(); // Use timestamp

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};
