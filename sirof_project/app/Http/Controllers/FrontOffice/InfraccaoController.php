<?php

namespace App\Http\Controllers\FrontOffice;

use App\Models\Infraccao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfraccaoController extends Controller
{
    // storeInfraccao
    public function storeInfraccao(Request $request){

        $infraccao = Infraccao::create([
            'envolvido_id' => $request->envolvido,
            'tipo_de_infraccao'=> $request->tipo_de_infraccao,
            'subtipo_de_infraccao'=> $request->subtipo_de_infraccao,
            'descricao'=> $request->descricao,
        ]);

        $envolvido = $infraccao->envolvido;

        return response()->json([
            'infraccao' => $infraccao,
            'envolvido' => $envolvido
        ]);  

    }

    // Method to Edit Envolvido
    public function editInfraccao($id){
        $infraccao = Infraccao::find($id);
        return response()->json($infraccao);
    }

    // updateInfraccao
    public function updateInfraccao(Request $request){

        $infraccao = Infraccao::find($request->infraccao_id);

        $infraccao->update([
            'tipo_de_infraccao'=> $request->tipo_de_infraccao_edit,
            'subtipo_de_infraccao'=> $request->subtipo_de_infraccao_edit,
            'descricao'=> $request->descricao_edit,
        ]);

        $notification = array(
            'message' => 'Infracção Actualizada com sucesso.',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification)->with('aba_ativa', 'infraccoes');

    }

    // Method deleteInfraccao
    public function deleteInfraccao($id){
        $infraccao = Infraccao::find($id);

        $infraccao->delete();

        $notification = array(
            'message' => 'Infracção removida com sucesso.',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification)->with('aba_ativa', 'infraccoes');

    }
    // End method
}
