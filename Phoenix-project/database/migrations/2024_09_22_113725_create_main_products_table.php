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
        Schema::create('main_products', function (Blueprint $table) {
            $table->id();
            $table->mediumText('Бүтээгдэхүүн')->nullable();
            $table->mediumText('Онцлог_шинж')->nullable();
            $table->mediumText('Зураг')->nullable();
            $table->mediumInteger('Үнэ')->default(0)->nullable();
            $table->text('Товч_мэдээлэл')->nullable();
            $table->mediumInteger('Тоон_хэмжээ')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_products');
    }
};
