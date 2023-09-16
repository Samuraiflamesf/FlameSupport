@extends('admin.layouts.app')
@section('title', 'Nova Duvida')

@section('header')
    Nova Duvida
@endsection

@section('content')

    <div class="container flex">

        <form action="{{ route('supports.store') }}" method="post">
            @csrf
            <input name="subject" type="text" placeholder="Assunto"
                class="input input-bordered input-secondary input-bordered w-full  m-1 p-1">
            <textarea name="body" cols="30" rows="5"
                class="textarea textarea-secondary  textarea-bordered textarea-md w-full  m-1 p-1" placeholder="Descricao"></textarea>
            <button type="submit" class="btn btn-info m-1 p-1 btn-block ">
                Enviar
            </button>
        </form>

        <a href="{{ route('supports.index') }}" class="btn btn-square mx-5"><svg
                xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg></a>

    </div>
@endsection
