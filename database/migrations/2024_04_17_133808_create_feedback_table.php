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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->enum('Problem', ['--select--', 'Road Work', 'Streat light repairing', 'Digitalization facilities', 'Water Timing Problem', 'School renovation', 'Awaas yojana', 'Electricity problem'])->default('--select--');
            $table->string('Feedback');
            $table->integer('range');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
