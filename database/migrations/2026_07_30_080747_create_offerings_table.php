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
        Schema::create('offerings', function (Blueprint $table) {
            $table->id();

            $table->foreignId('member_id')
                ->nullable()
                ->constrained('members')
                ->nullOnDelete();

            $table->enum('category', [
                'Mingguan',
                'Persepuluhan',
                'Syukur',
                'Pembangunan',
                'Diakonia',
                'Misi',
            ])->default('Mingguan');

            $table->decimal('amount', 15, 2);

            $table->date('offering_date');

            $table->enum('method', [
                'Tunai',
                'Transfer',
                'QRIS',
            ])->default('Tunai');

            $table->string('receipt_number')->nullable();

            $table->enum('status', [
                'pending',
                'verified',
                'cancelled',
            ])->default('verified');

            $table->text('note')->nullable();

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
        Schema::dropIfExists('offerings');
    }
};