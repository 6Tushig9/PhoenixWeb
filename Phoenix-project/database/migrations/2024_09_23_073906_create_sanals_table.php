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
        Schema::create('sanals', function (Blueprint $table) {
            $table->id();
            $table->mediumText('name')->nullable();
            $table->mediumInteger('phone_number')->nullable()->default(0);
            $table->mediumText('sanal_huselt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sanals');
    }
};