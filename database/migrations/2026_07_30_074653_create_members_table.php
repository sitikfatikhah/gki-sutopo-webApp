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
        Schema::create('members', function (Blueprint $table) {
            $table->id();

            $table->string('member_number')->unique();

            $table->string('full_name');

            $table->enum('gender', [
                'Laki-laki',
                'Perempuan',
            ])->nullable();

            $table->string('birth_place')->nullable();
            $table->date('birth_date')->nullable();

            $table->text('address')->nullable();

            $table->string('phone', 20)->nullable();
            $table->string('email')->nullable()->unique();

            $table->date('baptism_date')->nullable();

            $table->enum('membership_status', [
                'Simpatisan',
                'Anggota',
                'Penatua',
                'Diaken',
            ])->default('Simpatisan');

            $table->string('photo')->nullable();

            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate()->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};