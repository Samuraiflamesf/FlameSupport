<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SupportController extends Controller
{
    // Função que exibe a lista de dúvidas
    public function index(Support $support)
    {
        // Obtém todas as dúvidas da tabela de suporte
        $supports = $support->all();

        // Retorna a view 'admin/supports/index' com as dúvidas obtidas
        return view('admin/supports/index', compact('supports'));
    }

    // Função que exibe detalhes de uma dúvida específica
    public function show(string|int $id)
    {
        // Verifica se a dúvida com o ID fornecido existe
        if (!$support = Support::find($id)) {
            // Se não existir, retorna para a página anterior
            return back();
        }
        // Retorna a view 'admin/supports/show' com os detalhes da dúvida
        return view('admin/supports/show', compact('support'));
    }

    // Função para criar novas dúvidas
    public function create()
    {
        // Retorna a view 'admin/supports/create' para criar uma nova dúvida
        return view('admin/supports/create');
    }

    // Função para cadastrar novas dúvidas
    public function store(Request $request, Support $support)
    {
        // Obtém os dados do formulário
        $data = $request->all();

        // Define o status como 'a'
        $data['status'] = 'a';

        // Cria uma nova dúvida com os dados fornecidos
        $support = $support::create($data);

        // Redireciona para a página de lista de dúvidas
        return Redirect()->route('supports.index');
    }

    // Função para editar dúvidas existentes
    public function edit(Support $support, string|int $id)
    {
        // Verifica se a dúvida com o ID fornecido existe
        if (!$support = $support->where('id', $id)->first()) {
            // Se não existir, retorna para a página anterior
            return back();
        }
        // Retorna a view 'admin/supports.edit' para editar a dúvida
        return view('admin/supports.edit', compact('support'));
    }

    // Função para atualizar dúvidas existentes
    public function update(Request $request, Support $support, string $id)
    {
        // Verifica se a dúvida com o ID fornecido existe
        if (!$support = $support->find($id)) {
            // Se não existir, retorna para a página anterior
            return back();
        }

        // Atualiza a dúvida com os campos 'subject' e 'body' do formulário
        $support->update($request->only(
            'subject',
            'body'
        ));

        // Redireciona para a página de lista de dúvidas
        return redirect()->route('supports.index');
    }

    public function destroy(string|int $id)
    {
        // Verifica se a dúvida com o ID fornecido existe
        if (!$support = Support::find($id)) {
            // Se não existir, retorna para a página anterior
            return back();
        }
        
        $support->delete();

        // Redireciona para a página de lista de dúvidas
        return redirect()->route('supports.index');
    }
}
