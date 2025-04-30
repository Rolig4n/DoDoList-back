<?php

namespace App\Http\Controllers;

use App\Enum\StatusTarefa;
use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TarefaController extends Controller
{
    public function index()
    {
        return Tarefa::all()
            ->map( function (Tarefa $tarefa) {
                return [
                    'id' => $tarefa->id,
                    'titulo' => $tarefa->titulo,
                    'descricao' => $tarefa->descricao,
                    'data_vencimento' => $tarefa->data_vencimento,
                    'status' => $tarefa->status,
                ];
            });
    }

    // public function create()
    // {
    //     return view('tarefas.create');
    // }

    public function store(Request $request)
    {
        // Lógica para armazenar a tarefa no banco de dados
        $data = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required',
            'data_vencimento' => 'required|date',
            'status' => [Rule::enum(StatusTarefa::class)]// ainda nao entendi como validar enum
        ]);

        $novaTarefa = Tarefa::create($data);
        
        return response($novaTarefa, 201);
    }

    public function edit(Tarefa $tarefa)
    {
        return response($tarefa, 201);
    }

    public function update(Tarefa $tarefa, Request $request)
    {
        // Lógica para atualizar a tarefa no banco de dados
        $data = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required',
            'data_vencimento' => 'required|date',
            'status' => [Rule::enum(StatusTarefa::class)],// ainda nao entendi como validar enum
        ]);

        $tarefa->update($data);

        return response($tarefa, 201);
    }

    public function destroy(Tarefa $tarefa)
    {
        // Lógica para excluir a tarefa do banco de dados
        $tarefa->delete();
        return response('Deletada com sucesso', 201);
    }

    public function show($id)
    {
        $tarefa = Tarefa::find($id);
        return response($tarefa, 201);
    }
}
