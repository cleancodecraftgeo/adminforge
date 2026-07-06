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
        Schema::create('product_variant_values', function (Blueprint $table) {
            $table->foreignUlid('product_variant_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignUlid('attribute_value_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->primary([
            'product_variant_id',
            'attribute_value_id',
        ]);

        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variant_values');
    }
};
