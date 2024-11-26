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
        Schema::create('resultats', function (Blueprint $table) {
            $table->id();
            $table->string("q1");
            $table->string("q2");
            $table->string("q3");
            $table->string("q4");
            $table->string("q5");
            $table->string("q6");
            $table->string("q7");
            $table->string("q8");
            $table->string("r1");
            $table->string("r2");
            $table->string("r3");
            $table->string("r4");
            $table->text("r5");
            $table->text("r6");
            $table->string("r7");
            $table->text("r8");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultats');
    }
};
