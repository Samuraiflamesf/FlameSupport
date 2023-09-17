@extends('admin.layouts.app')
@section('title', 'Nova Duvida')

@section('container')
    @if ($errors->any())
        <!-- Verifica se há erros de validação -->
        <dialog id="my_modal_1" class="modal">
            <div class="modal-box">
                <h3 class="font-bold text-lg text-primary-content">Algo de errado não está certo!</h3>
                @foreach ($errors->all() as $error)
                    <!-- Loop para percorrer todos os erros de validação -->
                    <li class="py-1">
                        {{ $error }}
                    </li>
                @endforeach
                <div class="modal-action">
                    <form method="dialog">
                        <button class="btn">Fechar</button>
                    </form>
                </div>
            </div>
        </dialog>
    @endif

    <script>
        // Mostrar o modal quando houver erros
        const modal = document.getElementById("my_modal_1");
        modal.showModal();
    </script>
    <div class="flex justify-center h-full ">

        <div class="indicator m-auto">
            <span class="indicator-item ">
                <a href="{{ route('supports.index') }}">
                    <button class="btn btn-square btn-primary hover:btn-error mx-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </a>

            </span>
            <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-neutral text-primary-content">
                <div class="card-body">
                    <h2 class="card-title m-auto">
                        Detalhes da Dúvida #{{ $support->id }}
                    </h2>
                    <div class="divider"></div>

                    <form action="{{ route('supports.update', $support->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <input name="subject" type="text" placeholder="Assunto" value="{{ $support->subject }}"
                            class="input input-bordered input-secondary input-bordered w-full" required>
                        <textarea name="body" cols="30" rows="5"
                            class="textarea textarea-secondary  textarea-bordered textarea-md w-full mt-2" placeholder="Descricao" required>{{ $support->body }}</textarea>
                        <button type="submit">
                            <button class="btn btn-secondary hover:btn-success btn-block ">
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
