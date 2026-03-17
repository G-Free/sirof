<?php

namespace App\Http\Controllers\FrontOffice;

use App\Models\Ocorrencia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OcorrenciaController extends Controller
{
    /**
     * $user = auth()->user();

        $cargoAtivo = $user->cargos()
            ->where('estado', 'ativo')
            ->with(['cargo', 'estrutura'])
            ->first();

     */

    // Method to list all Ocorrencias
    public function allOcorrencia(){

        $user = auth()->user();

        //if($user->role == "Operador"){
            $ocorrencias = Ocorrencia::where('user_id', auth()->id())
                ->latest()
                ->get();
        /*}else{
            $ocorrencias = Ocorrencia::where('situacao', 'Submetido')
                ->latest()
                ->get();
        }*/
        
        return view('frontoffice.ocorrencia.all_ocorrencia', compact('ocorrencias'));
    }

    public function addOcorrencia(){
        //return view('frontoffice.ocorrencia.add_ocorrencia');
        return view('frontoffice.ocorrencia.add_ocorrencia_wizard');
    }

    // Method to store Ocorrência
    public function storeOcorrencia(Request $request){

        $user_id = auth()->user()->id;

        $ocorrencia = Ocorrencia::create([
            'user_id' => $user_id,
            'numero_ocorrencia' => '1234CC',
            'fluxo_fronteirico'=> $request->fluxo_fronteirico,
            'data'=> $request->data_ocorrencia,
            'hora'=> $request->hora_ocorrencia,
            'local'=> $request->local_ocorrencia,
            'situacao'=> 'Rascunho',
            'estado'=> $request->estado_ocorrencia,
            'descricao'=> $request->descricao_ocorrencia
        ]);

        session(['ocorrencia_id' => $ocorrencia->id]);

        return response()->json([
            'success' => true,
            'ocorrencia' => $ocorrencia
            //'ocorrencia' => 2
        ]);

        /*$notification = array(
            'message' => 'Ocorrência Adicionada com sucesso.',
            'alert-type' => 'success'
        );*/

        //return redirect()->route('details.ocorrencia', $ocorrencia->id)->with($notification)->with('aba_ativa', 'envolvidos');;

        //return redirect()->back()->with($notification);

    }
    //detailsOcorrencia

    // Method to Detail Ocorrencia
    public function detailsOcorrencia($id){
        $ocorrencia = Ocorrencia::find($id);
        return view('frontoffice.ocorrencia.details_ocorrencia', compact('ocorrencia'));
    }

    public function updateOcorrencia(Request $request){

        $ocorrencia = Ocorrencia::find($request->id);

        $ocorrencia->update([
            'fluxo_fronteirico'=> $request->fluxo_fronteirico,
            'data'=> $request->data_ocorrencia,
            'hora'=> $request->hora_ocorrencia,
            'local'=> $request->local_ocorrencia,
            'estado'=> $request->estado_ocorrencia,
            'descricao'=> $request->descricao_ocorrencia
        ]);

        $notification = array(
            'message' => 'Ocorrência actualizada com sucesso.',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification)->with('aba_ativa', 'envolvidos');

    }

    // Method deleteOcorrencia
    public function deleteOcorrencia($id){
        $ocorrencia = Ocorrencia::find($id);

        $ocorrencia->delete();

        $notification = array(
            'message' => 'Ocorrência removida com sucesso.',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }
    // End method


    // Method deleteOcorrencia
    public function getEnvolvidos($id){
        
        $ocorrencia = Ocorrencia::find($id);

        return response()->json($ocorrencia->envolvidos);

    }
    // End method

    // Method deleteOcorrencia
    public function getResumo($id){
        
        $ocorrencia = Ocorrencia::find($id);

        return response()->json($ocorrencia->load('envolvidos.infraccoes'));

    }
    // End method

    // Method submeterOcorrencia
    public function submeterOcorrencia($id){
        
        $ocorrencia = Ocorrencia::find($id);
        $ocorrencia->situacao = "Submetido";

        $ocorrencia->save();

        $notification = array(
            'message' => 'Ocorrência Submetida com sucesso.',
            'alert-type' => 'success'
        );

        // Grava na sessão (flash - só para a próxima requisição)
        session()->flash('message', 'Ocorrência Submetida com sucesso.');
        session()->flash('alert-type', 'success');

        return response()->json([
            'success' => true,
            'redirect' => route('all.ocorrencia')
        ]);

    }
    // End method

}
