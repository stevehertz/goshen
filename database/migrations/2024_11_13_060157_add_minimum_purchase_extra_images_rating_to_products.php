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
        Schema::table('products', function (Blueprint $table) {
            //
            $table->string('slug')->unique()->after('title')->nullable();
            $table->integer('minimum_purchase')->default(24)->after('price');
            $table->json('extra_images')->nullable()->after('minimum_purchase'); // To store multiple image URLs in JSON format
            $table->decimal('rating', 2, 1)->default(0)->nullable()->after('extra_images'); // Rating from 0.0 to 5.0
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->dropColumn(['minimum_purchase', 'extra_images', 'rating']);
        });
    }
};
