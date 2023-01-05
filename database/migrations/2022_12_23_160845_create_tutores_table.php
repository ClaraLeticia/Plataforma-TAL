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
        Schema::create('tutores', function (Blueprint $table) {
            $table->string('matricula_aluno',20)->primary();
            $table->string('id_membro_etep',20)->nullable()->default(NULL);
            $table->foreign('id_membro_etep')->references('matricula_membro')->on('membros_etep');
            $table->string('nome',50);
            $table->string('email',50);
            $table->string('telefone',20);
            $table->integer('id_materia',false,true)->nullable()->default(NULL);
            $table->foreign('id_materia')->references('id')->on('materias');
            $table->integer('id_professor_orientador',false,true)->nullable()->default(NULL);
            $table->foreign('id_professor_orientador')->references('id')->on('professores');
            $table->string('edital',10);
            $table->string('semestre',10);
            $table->string('senha');
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
        Schema::dropIfExists('tutores');
    }
};
