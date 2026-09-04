<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->enum('category', ['makanan', 'kerajinan'])->default('makanan')->after('image');
            $table->string('category_icon', 60)->default('lunch_dining')->after('category');
            $table->string('faculty', 30)->nullable()->after('seller_name');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['category', 'category_icon', 'faculty']);
        });
    }
};
