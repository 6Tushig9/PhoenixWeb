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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->mediumText('name')->unique();
            $table->mediumText('feature')->unique();
            $table->text('content')->unique();
            $table->mediumText('image')->unique();
            $table->integer('price')->default(0)->unique();
            $table->integer('number')->default(0)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
