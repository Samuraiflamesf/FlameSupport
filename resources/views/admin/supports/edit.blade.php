@extends('admin.layouts.app')
@section('title', 'Nova Duvida')

@section('container')
    <div class="flex justify-center h-full ">

        <div class="indicator m-auto">
            <span class="indicator-item ">
                <button class="btn btn-square btn-info hover:btn-error mx-5">

                    <a href="{{ route('supports.index') }}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg></a>
                </button>

            </span>
            <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-neutral">
                <div class="card-body">
                    <header
                        class="font-medium title-font text-base-100 mb-1 text-xl p-auto mx-5 mx-auto max-w-screen-xl p-4">
                        Duvida #{{ $support->id }}
                    </header>


                    <form action="{{ route('supports.update', $support->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <input name="subject" type="text" placeholder="Assunto"
                            value="{{ $support->subject }}"class="input input-bordered input-secondary input-bordered w-full"
                            required>
                        <textarea name="body" cols="30" rows="5"
                            class="textarea textarea-secondary  textarea-bordered textarea-md w-full mt-2" placeholder="Descricao" required>{{ $support->body }}</textarea>
                        <button type="submit">
                            <button class="btn btn-secondary hover:btn-success btn-block mt-3">
                                <i class="fa-regular fa-floppy-disk"></i>
                                Salvar
                                <i class="fa-regular fa-floppy-disk"></i>
                            </button>
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection
