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
            $table->foreignIdFor(MainProduct::class)->constrained();  // Foreign key to MainProduct model
            $table->mediumText('picture_1')->nullable();  // Nullable text column for picture 1
            $table->mediumText('picture_2')->nullable();  // Nullable text column for picture 2
            $table->mediumText('picture_3')->nullable();  // Nullable text column for picture 3
            $table->mediumText('picture_4')->nullable();  // Nullable text column for picture 4
            $table->mediumText('picture_5')->nullable();  // Nullable text column for picture 5
            $table->mediumText('picture_6')->nullable();  // Nullable text column for picture 6
            $table->mediumText('picture_7')->nullable();  // Nullable text column for picture 7
            $table->mediumText('picture_8')->nullable();  // Nullable text column for picture 8
            $table->timestamps();  // Created at and updated at timestamps
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
