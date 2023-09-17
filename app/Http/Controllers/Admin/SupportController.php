<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SupportController extends Controller
{
    //Funcao que  alimentar a tabela do index 
    public function index(Support $support)
    {
        $supports = $support->all();

        return view('admin/supports/index', compact('supports'));
    }

    //Funcao que visualiza detalhes da duvida
    public function show(string|int $id)
    {

        if (!$support = Support::find($id)) {
            return back();
        }
        return view('admin/supports/show', compact('support'));
    }

    //Funcao de criar novas duvidas
    public function create()
    {
        return view('admin/supports/create');
    }

    //Funcao para cadastar duvidas
    public function store(Request $request, Support $support)
    {

        $data = $request->all();

        $data['status'] = 'a';

        $support = $support::create($data);

        return Redirect()->route('supports.index');
    }

    //Funcao para editar as duvidas
    public function edit(Support $support, string|int $id)
    {
        if (!$support = $support->where('id', $id)->first()) {
            return back();
        }
        return view('admin/supports.edit', compact('support'));
    }

    //Funcao para atualizar as duvidas
    public function update(Request $request, Support $support, string $id)
    {
        if (!$support = $support->find($id)) {
            return back();
        }

        $support->update($request->only(
            'subject',
            'body'
        ));

        return redirect()->route('supports.index');
    }
}
