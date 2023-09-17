@extends('admin.layouts.app')
@section('title', 'Forum')
@section('container')

@section('header')
    Listagem dos Suportes
@endsection

<div class="overflow-x-auto bg-base-300 rounded">
    @foreach ($supports as $support)
    @endforeach

    <table class="table ">
        <thead>
            <th>Assunto</th>
            <th>Status</th>
            <th>Descricao</th>
            <th>Acao</th>
        </thead>
        <tbody>
            @foreach ($supports as $support)
                <tr class="hover ">
                    <td>{{ $support->subject }}</td>
                    <td>{{ $support->status }}</td>
                    <td>{{ $support->body }}</td>
                    <td>
                        <a href="{{route('supports.show',[$support->id])}}"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<a href="{{ route('supports.create') }}" class="btn btn-warning my-4">
   <i class="fa-solid fa-triangle-exclamation"></i> Criar Duvida <i class="fa-solid fa-triangle-exclamation"></i>
</a>
<div class="flex justify-between">
    <div></div>
    <div>
    </div>
</div>

@endsection
