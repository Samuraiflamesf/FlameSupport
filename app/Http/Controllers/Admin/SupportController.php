<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();

        return view('admin/supports/index', compact('supports'));
    }
    public function show(string|int $id)
    {

        if (!$support = Support::find($id)) {
            return back();
        }
        return view('admin/supports/show', compact('support'));
    }

    public function create()
    {
        return view('admin/supports/create');
    }
    public function store(Request $request, Support $support)
    {

        $data = $request->all();

        $data['status'] = 'a';

        $support = $support::create($data);

        return Redirect()->route('supports.index');
    }
}
