<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table = 'tutores';
    protected $guarded = [];
     
    // protected $fillable = [
    //     'matricula_aluno',
    //     'id_membro_etep',
    //     'nome',
    //     'email',
    //     'telefone',
    //     'id_materia',
    //     'id_professor_orientador',
    //     'edital',
    //     'semestre',
    //     'senha',
    // ];

    // protected $hidden = [
    //     'senha',
    //     'remember_token',
    //     'two_factor_recovery_codes',
    //     'two_factor_secret',
    // ];

    public function horarios(){
        return $this->hasMany('App\Model\Horario');
    }

    public function membro_etep(){
        return $this->belongsTo('App\Model\MembroEtep');
    }
}