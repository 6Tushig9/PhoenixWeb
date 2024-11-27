<?php

use App\Models\MainProduct;
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
        Schema::create('main_product_images', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(MainProduct::class)->constrained();
            $table->mediumText('picture_1')->nullable();
            $table->mediumText('picture_2')->nullable();
            $table->mediumText('picture_3')->nullable();
            $table->mediumText('picture_4')->nullable();
            $table->mediumText('picture_5')->nullable();
            $table->mediumText('picture_6')->nullable();
            $table->mediumText('picture_7')->nullable();
            $table->mediumText('picture_8')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_product_images');
    }
};
