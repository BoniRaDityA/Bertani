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
        Schema::create('history_price', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained(
                table:'products',
                indexName: 'product_id'
            );
            $table->timestamps();
            $table->decimal('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_price');
    }
};
