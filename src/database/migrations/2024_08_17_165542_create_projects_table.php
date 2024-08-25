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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en');
            $table->string('intro')->nullable();
            $table->string('image')->nullable();
            $table->string('type')->nullable();
            $table->string('client_name');
            $table->string('client_location');
            $table->date('project_date');
            $table->integer('project_budget');
            $table->text('body_uz');
            $table->text('body_ru');
            $table->text('body_en');
            $table->string('slug')->unique();
            $table->string('description_uz')->nullable();
            $table->string('description_ru')->nullable();
            $table->string('description_en')->nullable();
            $table->string('keywords_uz')->nullable();
            $table->string('keywords_ru')->nullable();
            $table->string('keywords_en')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
