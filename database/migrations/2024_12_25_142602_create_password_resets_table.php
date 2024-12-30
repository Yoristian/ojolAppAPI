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
        Schema::create('password_resets', function (Blueprint $table) {
            $table->id();  // Add an auto-incrementing primary key
            $table->string('email')->index();  // Index the email for fast lookups
            $table->string('token')->unique(); // Make the token unique
            $table->timestamp('created_at')->nullable();  // Nullable created_at timestamp
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('password_resets');
    }
};
