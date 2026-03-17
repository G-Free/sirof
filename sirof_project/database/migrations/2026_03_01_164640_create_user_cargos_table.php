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
        Schema::create('user_cargos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_user')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->foreignId('id_cargo')
                ->constrained('cargos')
                ->cascadeOnDelete();

            $table->foreignId('id_estrutura')
                ->constrained('estruturas')
                ->cascadeOnDelete();

            $table->enum('estado', ['ativo', 'inativo'])
                ->default('ativo');

            $table->date('data_inicio');
            $table->date('data_fim')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_cargos');
    }
};
