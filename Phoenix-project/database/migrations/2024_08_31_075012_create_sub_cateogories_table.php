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
        Schema::create('sub_cateogories', function (Blueprint $table) {
            $table->id();
            $table->mediumText('name');
            $table->mediumText('feature');
            $table->text('content');
            $table->mediumText('image');
            $table->integer('price');
            $table->integer('number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_cateogories');
    }
};
