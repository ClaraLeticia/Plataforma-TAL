<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacoes', function (Blueprint $table) {
            $table->id();
            $table->string('id_tutor',20);
            $table->foreign('id_tutor')->references('matricula_aluno')->on('tutores')->onDelete('cascade');
            $table->text('atendimentos');
            $table->text('dificuldade_discente');
            $table->text('dificuldade_tutor');
            $table->text('sugestoes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaliacoes');
    }
};
