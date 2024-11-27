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
    Schema::create('sub_products', function (Blueprint $table) {
        $table->id();
        $table->foreignIdFor(MainProduct::class)->constrained();
        $table->mediumText('model')->nullable();  // Removed default('') and kept nullable
        $table->mediumText('ontslog_shinj')->nullable();  // Removed default('') and kept nullable
        $table->mediumText('image')->nullable();
        $table->mediumInteger('price')->default(0)->nullable();  // Kept default(0)
        $table->mediumText('brief_information')->nullable();  // Removed default('') and kept nullable
        $table->mediumInteger('quantity')->default(0)->nullable();  // Kept default(0)
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_products');
    }
};