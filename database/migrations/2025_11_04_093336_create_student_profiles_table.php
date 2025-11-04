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
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // user record untuk student (role = siswa)
            $table->foreignId('parent_id')->nullable()->constrained('users')->onDelete('set null'); // parent user
            $table->string('niss')->nullable()->unique();
            $table->integer('niss_sequence')->nullable(); // for generating sequential number per year
            $table->string('full_name');
            $table->string('nick_name')->nullable();
            $table->enum('gender', ['Laki-laki', 'Perempuan'])->nullable();
            $table->string('birth_place')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('school_origin')->nullable();
            $table->string('size_jersey')->nullable();
            $table->string('phone')->nullable();
            $table->enum('status', ['pending','active'])->default('pending');
            $table->integer('kelompok_umur')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('jersey_number')->nullable();
            $table->timestamp('activated_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_profiles');
    }
};
