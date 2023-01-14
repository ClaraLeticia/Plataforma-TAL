<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Tutor;
use App\Models\Materia;
use App\Models\Horario;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        $tutores = Tutor::orderBy('id_materia','asc')->get();
        $materias = Materia::all();
        $horarios = Horario::all();
        return view('home',compact('tutores','materias','horarios'));
    }
}
