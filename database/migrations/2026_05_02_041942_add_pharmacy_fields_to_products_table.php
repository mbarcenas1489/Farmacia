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
            $table->string('generic_name')->nullable()->after('description');
            $table->string('brand_name')->nullable()->after('generic_name');
            $table->string('active_ingredient')->nullable()->after('brand_name');
            $table->string('concentration')->nullable()->after('active_ingredient');
            $table->string('pharmaceutical_form')->nullable()->after('concentration');
            $table->string('presentation')->nullable()->after('pharmaceutical_form');
            $table->string('unit_measure')->nullable()->after('presentation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'generic_name',
                'brand_name',
                'active_ingredient',
                'concentration',
                'pharmaceutical_form',
                'presentation',
                'unit_measure',
            ]);
        });
    }
};
