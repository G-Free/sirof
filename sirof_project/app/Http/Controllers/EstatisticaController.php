<?php

namespace App\Http\Controllers;

use App\Models\Envolvido;
use App\Models\Infraccao;
use App\Models\Ocorrencia;


class EstatisticaController extends Controller
{
    public function allEstatistica(){

        $ocorrencias = Ocorrencia::all();
        $envolvidos = Envolvido::all();
        $infraccoes_migratorias = Infraccao::where('tipo_de_infraccao', 'Migratoria')
                ->latest()
                ->get();

        $infraccoes_alfandegarias = Infraccao::where('tipo_de_infraccao', 'Alfandegaria')
                ->latest()
                ->get();

        return view('frontoffice.estatistica', compact('ocorrencias', 'envolvidos', 'infraccoes_migratorias', 'infraccoes_alfandegarias'));

    }

    /*public function allEstatistica()
    {
        $ocorrencias = Ocorrencia::with('envolvidos.infraccoes')->get();

        return view('frontoffice.estatistica', compact('ocorrencias'));
    }*/
        
}
