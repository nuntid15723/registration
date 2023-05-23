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
        Schema::create('workshop_sessions', function (Blueprint $table) {
            $table->id();
            $table->date('session_date');
            $table->string('session_name');
            $table->decimal('fee_member', 10, 2);
            $table->decimal('fee_non_member', 10, 2);
            $table->decimal('fee_student', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workshop_sessions');
    }
};
