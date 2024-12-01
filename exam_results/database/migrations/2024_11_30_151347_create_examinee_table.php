<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('examinee_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('exam_project');
            $table->tinyInteger('console_application');
            $table->tinyInteger('desktop_application');
            $table->tinyInteger('website');
            $table->tinyInteger('backend');
            $table->tinyInteger('frontend');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examinee');
    }
};
