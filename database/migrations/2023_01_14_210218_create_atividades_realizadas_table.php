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
        Schema::create('atividades_realizadas', function (Blueprint $table) {
            $table->integer('id',true,true);
            $table->string('id_tutor',20);
            $table->foreign('id_tutor')->references('matricula_aluno')->on('tutores')->onDelete('cascade');
            $table->integer('id_expediente',false,true);
            $table->foreign('id_expediente')->references('id')->on('expedientes')->onDelete('cascade');
            $table->date('dia');
            $table->time('horario');
            $table->string('discente');
            $table->string('turma_discente');
            $table->text('assunto');
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
        Schema::dropIfExists('atividades_realizadas');
    }
};
