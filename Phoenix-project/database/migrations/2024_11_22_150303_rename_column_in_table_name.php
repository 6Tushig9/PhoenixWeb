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
        Schema::table('advice', function (Blueprint $table) {
            $table->renameColumn('Гарчиг', 'title');
            $table->renameColumn('Зураг', 'image');
            $table->renameColumn('Зөвлөгөө', 'full_advice');
        });
        Schema::table('main_products', function (Blueprint $table) {
            $table->renameColumn('Бүтээгдэхүүн', 'product_name');
            $table->renameColumn('Онцлог_шинж', 'ontslog_shinj');
            $table->renameColumn('Зураг', 'image');
            $table->renameColumn('Үнэ', 'price');
            $table->renameColumn('Товч_мэдээлэл', 'brief_information');
            $table->renameColumn('Тоон_хэмжээ', 'quantity');
        });
        Schema::table('sub_products', function (Blueprint $table) {
            $table->renameColumn('Загвар', 'model');
            $table->renameColumn('Онцлог_шинж', 'ontslog_shinj');
            $table->renameColumn('Зураг', 'image');
            $table->renameColumn('Үнэ', 'price');
            $table->renameColumn('Товч_мэдээлэл', 'brief_information');
            $table->renameColumn('Тоон_хэмжээ', 'quantity');
        });
        Schema::table('sanals', function (Blueprint $table) {
            $table->renameColumn('Нэр', 'name');
            $table->renameColumn('Утасны_дугаар', 'phone_number');
            $table->renameColumn('Санал_хүсэлт', 'sanal_huselt');
        });
        Schema::table('hamtrahs', function (Blueprint $table) {
            $table->renameColumn('Нэр', 'name');
            $table->renameColumn('Утасны_дугаар', 'phone_number');
            $table->renameColumn('Хатрах_хүсэлт', 'hamtrah_huselt');
        });
        Schema::table('organizations', function (Blueprint $table) {
            $table->renameColumn('Нэр', 'name');
            $table->renameColumn('Зураг', 'image');
        });
        Schema::table('statistics', function (Blueprint $table) {
            $table->renameColumn('Жил', 'year');
            $table->renameColumn('Нийт_айл_өрх', 'household_sum');
            $table->renameColumn('Хэмнэсэн_цахилгаан', 'saved_bill');
            $table->renameColumn('Бууруулсан_нүүрс_хүчлийн_хий', 'carbon_reduced');
        });
        Schema::table('main_product_images', function (Blueprint $table) {
            $table->renameColumn('Зураг_1', 'picture_1');
            $table->renameColumn('Зураг_2', 'picture_2');
            $table->renameColumn('Зураг_3', 'picture_3');
            $table->renameColumn('Зураг_4', 'picture_4');
            $table->renameColumn('Зураг_5', 'picture_5');
            $table->renameColumn('Зураг_6', 'picture_6');
            $table->renameColumn('Зураг_7', 'picture_7');
            $table->renameColumn('Зураг_8', 'picture_8');
        });
        Schema::table('sub_product_images', function (Blueprint $table) {
            $table->renameColumn('Зураг_1', 'picture_1');
            $table->renameColumn('Зураг_2', 'picture_2');
            $table->renameColumn('Зураг_3', 'picture_3');
            $table->renameColumn('Зураг_4', 'picture_4');
            $table->renameColumn('Зураг_5', 'picture_5');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('advice', function (Blueprint $table) {
            $table->renameColumn('title', 'Гарчиг');
            $table->renameColumn('image', 'Зураг');
            $table->renameColumn('full_advice', 'Зөвлөгөө');
        });
        Schema::table('main_products', function (Blueprint $table) {
            $table->renameColumn('product_name', 'Бүтээгдэхүүн');
            $table->renameColumn('ontslog_shinj', 'Онцлог_шинж');
            $table->renameColumn('image', 'Зураг');
            $table->renameColumn('price', 'Үнэ');
            $table->renameColumn('brief_information', 'Товч_мэдээлэл');
            $table->renameColumn('quantity', 'Тоон_хэмжээ');
        });
        Schema::table('sub_products', function (Blueprint $table) {
            $table->renameColumn('model', 'Загвар');
            $table->renameColumn('ontslog_shinj', 'Онцлог_шинж');
            $table->renameColumn('image', 'Зураг');
            $table->renameColumn('price', 'Үнэ');
            $table->renameColumn('brief_information', 'Товч_мэдээлэл');
            $table->renameColumn('quantity', 'Тоон_хэмжээ');
        });
        Schema::table('sanals', function (Blueprint $table) {
            $table->renameColumn('name', 'Нэр');
            $table->renameColumn('phone_number', 'Утасны_дугаар');
            $table->renameColumn('sanal_huselt', 'Санал_хүсэлт');
        });
        Schema::table('hamtrahs', function (Blueprint $table) {
            $table->renameColumn('name', 'Нэр');
            $table->renameColumn('phone_number', 'Утасны_дугаар');
            $table->renameColumn('hamtrah_huselt', 'Хатрах_хүсэлт');
        });
        Schema::table('organizations', function (Blueprint $table) {
            $table->renameColumn('name', 'Нэр');
            $table->renameColumn('image', 'Зураг');
        });
        Schema::table('statistics', function (Blueprint $table) {
            $table->renameColumn('year', 'Жил');
            $table->renameColumn('household_sum', 'Нийт_айл_өрх');
            $table->renameColumn('saved_bill', 'Хэмнэсэн_цахилгаан');
            $table->renameColumn('carbon_reduced', 'Бууруулсан_нүүрс_хүчлийн_хий');
        });
        Schema::table('main_product_images', function (Blueprint $table) {
            $table->renameColumn('picture_1', 'Зураг_1');
            $table->renameColumn('picture_2', 'Зураг_2');
            $table->renameColumn('picture_3', 'Зураг_3');
            $table->renameColumn('picture_4', 'Зураг_4');
            $table->renameColumn('picture_5', 'Зураг_5');
            $table->renameColumn('picture_6', 'Зураг_6');
            $table->renameColumn('picture_7', 'Зураг_7');
            $table->renameColumn('picture_8', 'Зураг_8');
        });
        Schema::table('sub_product_images', function (Blueprint $table) {
            $table->renameColumn('picture_1', 'Зураг_1');
            $table->renameColumn('picture_2', 'Зураг_2');
            $table->renameColumn('picture_3', 'Зураг_3');
            $table->renameColumn('picture_4', 'Зураг_4');
            $table->renameColumn('picture_5', 'Зураг_5');
        });
    }
};
