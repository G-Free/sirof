<?php

namespace App\Http\Controllers\FrontOffice;

use App\Models\Envolvido;
use App\Models\Ocorrencia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnvolvidoController extends Controller
{

    // Method to list all Ocorrencias
    public function allEnvolvidos(){
        $ocorrencias = Ocorrencia::latest()->get();
        return view('frontoffice.ocorrencia.envolvidos.all_envolvidos', compact('ocorrencias'));
    }

    // storeEnvolvido
    public function storeEnvolvido(Request $request){

        $envolvido = Envolvido::create([
            'ocorrencia_id' => $request->ocorrencia_id,
            'nome'=> $request->nome_completo,
            'data_de_nascimento'=> $request->data_de_nascimento,
            'sexo'=> $request->sexo,
            'nacionalidade'=> $request->nacionalidade,
            'profissao'=> $request->profissao,
            'documento_de_identificacao'=> $request->documento_de_identificacao,
            'numero_do_documento'=> $request->numero_do_documento,
            'tipo_de_envolvimento'=> $request->tipo_de_envolvimento,
            'contacto'=> $request->contacto,
            'endereco'=> $request->endereco,
            'descricao'=> $request->descricao
        ]);

        return response()->json($envolvido);

        /*return response()->json([
            'success' => true,
            // 'ocorrencia' => $ocorrencia
            'envolvido' => 2
        ]);*/

        /*$notification = array(
            'message' => 'Envolvido Adicionado com sucesso.',
            'alert-type' => 'success'
        );*/

        //return redirect()->back()->with($notification)->with('aba_ativa', 'envolvidos');

    }

    // Method to Edit Envolvido
    public function editEnvolvido($id){
        $envolvido = Envolvido::find($id);
        return response()->json($envolvido);
    }

    // updateEnvolvido
    public function updateEnvolvido(Request $request){

        $envolvido = Envolvido::find($request->envolvido_id);

        $envolvido->update([
            'nome'=> $request->nome_completo_edit,
            'data_de_nascimento'=> $request->data_de_nascimento_edit,
            'sexo'=> $request->sexo_edit,
            'nacionalidade'=> $request->nacionalidade_edit,
            'profissao'=> $request->profissao_edit,
            'documento_de_identificacao'=> $request->documento_de_identificacao_edit,
            'numero_do_documento'=> $request->numero_do_documento_edit,
            'tipo_de_envolvimento'=> $request->tipo_de_envolvimento_edit,
            'contacto'=> $request->contacto_edit,
            'endereco'=> $request->endereco_edit,
            'descricao'=> $request->descricao_edit
        ]);

        return response()->json($envolvido);

        /*return response()->json([
            'success' => true,
            'message' => 'Envolvido actualizado com sucesso!!!'
        ]);*/

        /*$notification = array(
            'message' => 'Envolvido Actualizado com sucesso.',
            'alert-type' => 'success'
        );*/

        //return redirect()->back()->with($notification)->with('aba_ativa', 'envolvidos');;

    }

    // Method deleteEnvolvido
    public function deleteEnvolvido($id){
        $envolvido = Envolvido::find($id);

        $envolvido->delete();

        return response()->json([
            'success' => true,
            'message' => 'Envolvido removido com sucesso!!!'
        ]);

        /*$notification = array(
            'message' => 'Envolvido removido com sucesso.',
            'alert-type' => 'success'
        );*/

        //return redirect()->back()->with($notification)->with('aba_ativa', 'envolvidos');
    }
    // End method
    
}
