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
        Schema::create('ocorrencias', function (Blueprint $table) {
            $table->id();

            /*------ NOVOS CAMPOS ------*/
            $table->unsignedBigInteger('user_id');
            $table->string('numero_ocorrencia');
            $table->enum('fluxo_fronteirico', ['Entrada', 'Saída']);
            $table->string('data');
            $table->string('hora');
            $table->string('local');
            $table->enum('situacao', ['Rascunho', 'Submetido', 'Devolvido', 'Despachado']);
            $table->enum('estado', ['Aberto', 'Em Investigação', 'Encerrado', 'Arquivado']);
            $table->text('descricao');
            /*------ FIM ------*/

            /// Foreign Key Constraints
            $table->foreign('user_id')->references('id')->on
            ('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ocorrencias');
    }
};
