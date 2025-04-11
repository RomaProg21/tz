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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('area', ['личная', 'служебная', 'компания']);
            $table->enum('status', ['новая', 'принята', 'в работе', 'отложено', 'выполнено', 'отменено'])->default('новая');
            $table->text('description')->nullable(); 
            $table->foreignId('creator_id')->constrained('users')->cascadeOnDelete(); 
            $table->foreignId('executor_id')->nullable()->constrained('users')->cascadeOnDelete(); 
            $table->timestamp('in_work_start_time')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
