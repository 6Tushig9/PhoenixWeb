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
            $table->mediumText('product_name')->default('')->nullable();
            $table->mediumText('ontslog_shinj')->default('')->nullable();
            $table->mediumText('image')->nullable();
            $table->mediumInteger('price')->default(0)->nullable();
            $table->mediumText('brief_information')->default('')->nullable();
            $table->mediumInteger('quantity')->default(0)->nullable();
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