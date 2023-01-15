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
        Schema::create('expedientes', function (Blueprint $table) {
            $table->id();
            $table->string('id_tutor',20);
            $table->foreign('id_tutor')->references('matricula_aluno')->on('tutores')->onDelete('cascade');
            $table->integer('dia',false,true);
            $table->string('mes',20);
            $table->string('ano',5);
            $table->time('hora_entrada');
            $table->time('hora_saida');
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
        Schema::dropIfExists('expedientes');
    }
};
