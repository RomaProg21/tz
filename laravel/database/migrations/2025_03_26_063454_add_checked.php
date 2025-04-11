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
        Schema::table('notifications_logs', function (Blueprint $table) {
            $table->boolean('checked')->default(0)->after('recipients');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('notifications_logs', function (Blueprint $table) {
            $table->dropColumn('checked');
        });
    }
};
