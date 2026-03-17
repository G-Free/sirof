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
        Schema::create('envolvidos', function (Blueprint $table) {
            $table->id();


            // CAMPOS NOVOS
            $table->unsignedBigInteger('ocorrencia_id');
            $table->string('nome');
            $table->string('data_de_nascimento');
            $table->string('sexo');
            $table->string('nacionalidade');
            $table->string('profissao')->nullable();
            $table->string('documento_de_identificacao')->nullable();
            $table->string('numero_do_documento')->nullable();
            $table->string('tipo_de_envolvimento');
            $table->string('contacto')->nullable();
            $table->string('endereco')->nullable();
            $table->text('descricao')->nullable();
            
            /// Foreign Key Constraints
            $table->foreign('ocorrencia_id')->references('id')->on
            ('ocorrencias')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envolvidos');
    }
};
