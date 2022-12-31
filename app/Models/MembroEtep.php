<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembroEtep extends Model
{
    protected $table = 'membros_etep';
    protected $primaryKey = 'matricula_membro';
    protected $guarded = [];

    public function tutores(){
        return $this->hasMany('App\Model\Tutor');
    }

    public function recados(){
        return $this->hasMany('App\Model\Recado');
    }
}
