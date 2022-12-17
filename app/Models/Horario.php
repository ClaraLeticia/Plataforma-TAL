<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horarios';

    public function tutor(){
        return $this->belongsTo('App\Model\Tutor');
    }
}
