<?php

use App\Models\SubProduct;
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
        Schema::create('sub_product_images', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(SubProduct::class)->constrained();
            $table->mediumText('Зураг_1')->nullable();
            $table->mediumText('Зураг_2')->nullable();
            $table->mediumText('Зураг_3')->nullable();
            $table->mediumText('Зураг_4')->nullable();
            $table->mediumText('Зураг_5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_product_images');
    }
};
