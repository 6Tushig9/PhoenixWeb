<?php

namespace App\Models;
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
        Schema::create('upload_product', function (Blueprint $table) {
            $table->id();
            $table->mediumText('product-name');
            $table->mediumText('product-feature');
            $table->text('product-info');
            $table->foreignIdFor(ProductPrice::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upload_product');
    }
};
