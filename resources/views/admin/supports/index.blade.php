@extends('admin.layouts.app')
@section('title', 'Forum')
@section('content')

@section('header')
    Listagem dos Suportes
@endsection

<div class="overflow-x-auto">
    @foreach ($supports as $support)
    @endforeach

    <table class="table">
        <thead>
            <th>Assunto</th>
            <th>Status</th>
            <th>Descricao</th>
            <th>Acao</th>
        </thead>
        <tbody>
            @foreach ($supports as $support)
                <tr class="hover">
                    <td>{{ $support->subject }}</td>
                    <td>{{ $support->status }}</td>
                    <td>{{ $support->body }}</td>
                    <td>
                        >
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<a href="{{ route('supports.create') }}" class="btn btn-warning my-4">Criar Duvida</a>
<div class="flex justify-between">
    <div></div>
    <div>
    </div>
</div>

@endsection
