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
            $table->mediumText('product_name')->nullable();
            $table->mediumText('ontslog_shinj')->nullable();
            $table->mediumText('image')->nullable();
            $table->mediumInteger('price')->nullable()->default(0);
            $table->mediumText('brief_information')->nullable();
            $table->mediumInteger('quantity')->nullable()->default(0);
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