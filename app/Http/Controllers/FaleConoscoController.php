<?php

namespace App\Http\Controllers;

use App\FaleConosco;
use App\Mail\EmailFaleConosco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Throwable;

/**
 * Controller para gerenciar as operações na tela de Fale Conosco
 *
 * @author Igor Barbosa Nogueira <igornogueir@gmail.com>
 * @version 1.0
 */
class FaleConoscoController extends Controller
{
    /**
     * Representa a página inicial do sistema
     *
     * Irá retornar a tela 'inicial' do Fale Conosco
     *
     * @author Igor Barbosa Nogueira <igornogueir@gmail.com>
     */
    public function index() {
        return view('fale-conosco');
    }

    public function all() {
       
        $mensagens = FaleConosco::all();

        return view('fale-conosco-lista')->with(['mensagens' => $mensagens]);
    }

    /**
     * Representa o envio da mensagem feita pelo usuário
     *
     * Irá receber os dados da mensagem enviada e redirecionará para a página inicial
     *
     * @author Igor Barbosa Nogueira <igornogueir@gmail.com>
     * @param Request $request
     * @return void
     */
    public function create(Request $request) {
        
        $dados = $request->all();
        
        $dados = [
            'nome' => $dados['nome'] ?? '' ,
            'email' => $dados['email'] ?? '',
            'uf' => $dados['uf'] ?? '',
            'cidade' => $dados['cidade'] ?? '',
            'setor' => $dados['setor'] ?? '',
            'telefone' => $dados['telefone'] ?? '',
            'mensagem' => $dados['mensagem'] ?? ''
        ];

        $resposta = [];        

        $validator = Validator::make(
            $dados,
            [
                'nome' => 'required',
                'email' => 'email',
                'uf' => 'size:2',
                'cidade' => '',
                'setor' => '',
                'telefone' => 'celular_com_ddd',
                'mensagem' => 'required'
            ]
        );
    
        if($validator->fails()) {

            $mensagem = 'Verifique os seguintes itens: ';

            $mensagem .= $validator->errors()->first();

            $resposta = [
                'status' => FALSE,
                'message' => $mensagem
            ];

            return response()->json($resposta, 422);
        }
        try {

            DB::beginTransaction();

            $faleConosco = FaleConosco::create($dados);

            $resposta = [
                'status' => TRUE,
                'message' => 'Sua mensagem foi enviada com sucesso!'
            ];

            Mail::to('igornogueir@gmail.com')->send(new EmailFaleConosco($dados));

            DB::commit();

            return response()->json($resposta, 201);
        } catch(Throwable $e) {
            DB::rollBack();
            $resposta = [
                'status' => FALSE,
                'message' => 'Por favor, tente novamente mais tarde.'
            ];
            return response()->json($resposta, 500);
        }

    }
}
