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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('position',50);
            $table->foreignId('teacher_id')->constrained('classes');
            $table->string('teacherName',100);
            $table->string('image',100);
            $table->string('facebook',100);
            $table->string('twiter',100);
            $table->boolean('active');
            $table->string('instagram',100);


            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
