<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recado extends Model
{
    protected $table = 'recados';

    public function membro_etep(){
        return $this->belongsTo('App\Model\MembroEtep');
    }
}
