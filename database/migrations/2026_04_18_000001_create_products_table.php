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
            $table->foreignId('category_id')->constrained('categories')->restrictOnDelete();
            $table->string('name_en');
            $table->string('name_ar');
            $table->longText('detail_en');
            $table->longText('detail_ar');
            $table->longText('specification_en')->nullable();
            $table->longText('specification_ar')->nullable();
            $table->decimal('price', 12, 2);
            $table->string('discount_type');
            $table->decimal('discount', 12, 2)->default(0);
            $table->timestamps();

            $table->index('category_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
