<?php

namespace App\Http\Controllers\Admin;

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\Support;
use App\Services\SupportService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SupportController extends Controller
{
    public function __construct(
        protected SupportService $service
    ) {
    }

    // Função que exibe a lista de dúvidas
    public function index(Request $request)
    {
        // Obtém todas as dúvidas da tabela de suporte
        $supports = $this->service->getAll($request->filter);

        // Retorna a view 'admin/supports/index' com as dúvidas obtidas
        return view('admin/supports/index', compact('supports'));
    }

    // Função que exibe detalhes de uma dúvida específica
    public function show(string $id)
    {
        // Verifica se a dúvida com o ID fornecido existe
        if (!$support = $this->service->findOne($id)) {
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
    public function store(StoreRequest $request, Support $support)
    {
        $this->service->new(
            CreateSupportDTO::makFromRequest($request)
        );

        // Redireciona para a página de lista de dúvidas
        return Redirect()->route('supports.index');
    }

    // Função para editar dúvidas existentes
    public function edit(string $id)
    {
        // Verifica se a dúvida com o ID fornecido existe
        if (!$support = $this->service->findOne($id)) {
            // Se não existir, retorna para a página anterior
            return back();
        }
        // Retorna a view 'admin/supports.edit' para editar a dúvida
        return view('admin/supports.edit', compact('support'));
    }

    // Função para atualizar dúvidas existentes
    public function update(StoreRequest $request, Support $support, string $id)
    {
        $support = $this->service->update(
            UpdateSupportDTO::makFromRequest($request)
        );

        // Verifica se a dúvida com o ID fornecido existe
        if (!$support) {
            // Se não existir, retorna para a página anterior
            return back();
        }

        // Redireciona para a página de lista de dúvidas
        return redirect()->route('supports.index');
    }

    public function destroy(string $id)
    {
        $this->service->delete($id);

        // Redireciona para a página de lista de dúvidas
        return redirect()->route('supports.index');
    }
}
