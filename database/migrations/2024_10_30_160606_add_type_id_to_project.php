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
        Schema::table('project', function (Blueprint $table) {
            $table->foreignId('type_id')->nullable()->constrained(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('project', function (Blueprint $table) {
            if (Schema::hasColumn('projects', 'type_id')) {
                $table->dropForeign(['type_id']);
                $table->dropColumn('type_id'); 
            }
        });
    }
};
