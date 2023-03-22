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
        Schema::create('exam_questions', function (Blueprint $table) {
            $table->unsignedBigInteger('ExamId');
            $table->foreign('ExamId')->references('ExamId')->on('exams')->onDelete('cascade');
            $table->unsignedBigInteger('QuestionId');
            $table->foreign('QuestionId')->references('QuestionId')->on('questions')->onDelete('cascade');
            $table->primary(['ExamId', 'QuestionId']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_questions');
    }
};
