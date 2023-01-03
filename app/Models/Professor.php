<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professores';
    protected $guarded = [];

    public function membro_etep(){
        return $this->belongsTo('App\Model\MembroEtep');
    }

}
