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
    Schema::create('candidate_profiles', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->cascadeOnDelete();

        $table->string('headline')->nullable();
        $table->text('bio')->nullable();

        $table->string('location')->nullable();
        $table->string('work_preference')->nullable(); // remote/hybrid/onsite
        $table->string('availability')->nullable();

        $table->integer('expected_salary')->nullable();

        $table->string('linkedin_url')->nullable();
        $table->string('github_url')->nullable();
        $table->string('portfolio_url')->nullable();

        $table->string('cv_path')->nullable();

        $table->string('verification_status')
              ->default('draft');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_profiles');
    }
};
