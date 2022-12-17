<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table = 'tutores';

    public function horarios(){
        return $this->hasMany('App\Model\Horario');
    }

    public function membro_etep(){
        return $this->belongsTo('App\Model\MembroEtep');
    }
}