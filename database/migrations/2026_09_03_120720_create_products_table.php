<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('image');
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 12, 2);
            $table->string('variant')->nullable();
            $table->string('seller_name');
            $table->string('whatsapp', 20);
            $table->string('net_weight', 50)->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};