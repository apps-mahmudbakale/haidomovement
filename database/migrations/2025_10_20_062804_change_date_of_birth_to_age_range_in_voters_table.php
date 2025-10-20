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
        Schema::table('voters', function (Blueprint $table) {
            // Remove the date_of_birth column
            $table->dropColumn('date_of_birth');
            
            // Add the age_range column
            $table->enum('age_range', [
                '18-25',
                '26-30',
                '31-40',
                '41-50',
                '51-60',
                '61-70',
                '71+'
            ])->after('gender');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('voters', function (Blueprint $table) {
            // Remove the age_range column
            $table->dropColumn('age_range');
            
            // Add back the date_of_birth column
            $table->date('date_of_birth')->after('gender');
        });
    }
};
