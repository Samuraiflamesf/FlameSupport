@extends('admin.layouts.app')
@section('title', 'Nova Duvida')


@section('content')

<div class="hero-content mt-0 pt-0">

    <div class="indicator">
        <span class="indicator-item ">
            <a href="{{ route('supports.index') }}" class="btn btn-square btn-info mx-5"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg></a>

        </span>
        <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-200">
            <div class="card-body">
                <header class="font-medium title-font text-gray-900 mb-1 text-xl p-auto mx-5 mx-auto max-w-screen-xl p-4">
                    Nova Duvida
                </header>


                <form action="{{ route('supports.store') }}" method="post" class="form-control">
                    @csrf
                    <input name="subject" type="text" placeholder="Assunto" class="input input-bordered input-secondary input-bordered w-full">
                    <textarea name="body" cols="30" rows="5" class="textarea textarea-secondary  textarea-bordered textarea-md w-full mt-2" placeholder="Descricao"></textarea>
                    <button type="submit" class="btn btn-info btn-block mt-2">
                        Enviar
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection