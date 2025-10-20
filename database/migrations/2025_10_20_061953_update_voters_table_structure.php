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
        // Add new columns
        Schema::table('voters', function (Blueprint $table) {
            // Drop old columns
            $table->dropColumn(['local_government_area', 'ward', 'polling_unit']);
            
            // Add new foreign key columns
            $table->foreignId('lga_id')->after('residential_address')->constrained('l_g_a_s');
            $table->foreignId('ward_id')->after('lga_id')->constrained('wards');
            $table->foreignId('polling_unit_id')->after('ward_id')->constrained('polling_units');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('voters', function (Blueprint $table) {
            // Drop foreign key constraints
            $table->dropForeign(['lga_id']);
            $table->dropForeign(['ward_id']);
            $table->dropForeign(['polling_unit_id']);
            
            // Drop columns
            $table->dropColumn(['lga_id', 'ward_id', 'polling_unit_id']);
            
            // Re-add old columns
            $table->string('local_government_area')->after('residential_address');
            $table->string('ward')->after('local_government_area');
            $table->string('polling_unit')->after('ward');
        });
    }
};
