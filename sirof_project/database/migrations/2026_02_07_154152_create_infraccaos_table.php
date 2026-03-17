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
        Schema::create('infraccaos', function (Blueprint $table) {
            $table->id();

            // CAMPOS NOVOS
            $table->unsignedBigInteger('envolvido_id');
            $table->string('tipo_de_infraccao');
            $table->string('subtipo_de_infraccao');
            $table->text('descricao')->nullable();
            
            /// Foreign Key Constraints
            $table->foreign('envolvido_id')->references('id')->on
            ('envolvidos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infraccaos');
    }
};
