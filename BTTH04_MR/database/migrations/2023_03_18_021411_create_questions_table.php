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
        Schema::create('questions', function (Blueprint $table) {
            $table->id('QuestionId');
            $table->unsignedBigInteger('CategoryId');
            $table->foreign('CategoryId')->references('CategoryId')->on('question_categories')->onDelete('cascade');
            $table->string('QuestionText');
            $table->string('Option1');
            $table->string('Option2');
            $table->string('Option3');
            $table->string('Option4');
            $table->string('Answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
